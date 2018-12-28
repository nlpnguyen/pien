@extends('page.master2')
@section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <nav class="woocommerce-breadcrumb"><a href="<?php echo route('page.home') ?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Checkout</nav>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article class="page type-page status-publish hentry">
                    <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header><!-- .entry-header -->

                    <form enctype="multipart/form-data" action="{!! route('page.checkout') !!}" class="checkout woocommerce-checkout" method="post" name="checkout">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div id="customer_details" class="col2-set">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">

                                    <h3>Thông Tin Khách Hàng</h3>

                                    <p id="ten_khach_hang" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">Tên Khách Hàng<abbr title="required" class="required">*</abbr>
                                        </label><input type="text"   id="ten_khach_hang" name="ten_khach_hang" class="input-text "></p>
                                    <p id="phone" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Số Điện Thoại <abbr title="required" class="required">*</abbr>
                                        </label><input type="tel"   id="phone" name="phone" class="input-text "></p><div class="clear"></div>
                                    <p id="dia_chi" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Địa Chỉ <abbr title="required" class="required">*</abbr></label>
                                        <input type="text"   id="dia_chi" name="dia_chi" class="input-text "></p>
                                    <p id="email" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_email">Email <abbr title="required" class="required">*</abbr>
                                        </label><input type="email"   id="email" name="email" class="input-text "></p>
                                    {{--<p id="billing_last_name_field" class="form-row form-row form-row-last validate-required"><label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>--}}
                                        {{--</label><input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text "></p><div class="clear"></div>--}}

                                    {{--<p id="billing_company_field" class="form-row form-row form-row-wide"><label class="" for="billing_company">Địa Chỉ</label>--}}
                                        {{--<input type="text" value="" placeholder="" id="dia_chi" name="dia_chi" class="input-text "></p>--}}
                                    {{--<p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email <abbr title="required" class="required">*</abbr>--}}
                                        {{--</label><input type="email" value="" placeholder="" id="email" name="email" class="input-text "></p>--}}

                                    {{--<p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>--}}
                                        {{--</label><input type="tel" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text "></p><div class="clear"></div>--}}

                                    {{--<p id="billing_country_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_country" name="billing_phone" class="input-text "></p><div class="clear"></div>--}}

                                    {{--<p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr></label>--}}
                                        {{--<input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text "></p>--}}

                                    {{--<p id="billing_address_2_field" class="form-row form-row form-row-wide address-field"><input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text "></p>--}}

                                    {{--<p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_city" name="billing_city" class="input-text "></p>--}}

                                    {{--<p id="billing_state_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_state">State / County <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_state" name="billing_phone" class="input-text "></p>--}}

                                    {{--<p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Postcode / ZIP <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text "></p>--}}

                                    {{--<div class="clear"></div>--}}

                                    {{--<p class="form-row form-row-wide create-account"><input type="checkbox" value="1" name="createaccount" id="createaccount" class="input-checkbox"> <label class="checkbox" for="createaccount">Create an account?</label></p>--}}

                                </div>
                            </div>

                            <div class="col-2">
                                <h3>Vận Chuyển</h3>
                                <div class="woocommerce-shipping-fields">
                                    {{--<h3 id="ship-to-different-address">--}}
                                        {{--<label class="checkbox" for="ship-to-different-address-checkbox">Ship to a different address?</label>--}}
                                        {{--<input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox" id="ship-to-different-address-checkbox">--}}
                                    {{--</h3>--}}

                                    <p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Ghi Chú Hóa Đơn</label>
                                        <textarea cols="5" rows="11" placeholder="Ghi Chú" id="ghi_chu" class="input-text " name="ghi_chu"></textarea></p>
                                </div>
                            </div>
                        </div>

                        <h3 id="order_review_heading">Hóa Đơn</h3>

                        <div class="woocommerce-checkout-review-order" id="order_review">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $item)
                                <tr class="cart_item">
                                    <td class="product-name">{{$item->name}};<strong class="product-quantity">× {{$item->qty}}</strong></td>
                                    <td class="product-total"><span class="amount">{{$item->price}}</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>

                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">{{cart::subtotal()}}</span></td>
                                </tr>

                                {{--<tr class="shipping">--}}
                                    {{--<th>Shipping</th>--}}
                                    {{--<td data-title="Shipping">Flat Rate: <span class="amount">$300.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>--}}
                                {{--</tr>--}}

                                {{--<tr class="order-total">--}}
                                    {{--<th>Total</th>--}}
                                    {{--<td><strong><span class="amount">$3,599.00</span></strong> </td>--}}
                                {{--</tr>--}}
                                </tfoot>
                            </table>

                            <div class="woocommerce-checkout-payment" id="payment">
                                {{--<ul class="wc_payment_methods payment_methods methods">--}}
                                    {{--<li class="wc_payment_method payment_method_bacs">--}}
                                        {{--<input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">--}}
                                        {{--<label for="payment_method_bacs">Direct Bank Transfer</label>--}}
                                        {{--<div class="payment_box payment_method_bacs">--}}
                                            {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li class="wc_payment_method payment_method_cheque">--}}
                                        {{--<input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">--}}
                                        {{--<label for="payment_method_cheque">Cheque Payment 	</label>--}}
                                        {{--<div style="display:none;" class="payment_box payment_method_cheque">--}}
                                            {{--<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li class="wc_payment_method payment_method_cod">--}}
                                        {{--<input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">--}}

                                        {{--<label for="payment_method_cod">Cash on Delivery</label>--}}
                                        {{--<div style="display:none;" class="payment_box payment_method_cod">--}}
                                            {{--<p>Pay with cash upon delivery.</p>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}

                                {{--</ul>--}}
                                <div class="form-row place-order">
                                    <p class="form-row terms wc-terms-and-conditions">
                                        <input type="checkbox" id="terms" name="terms" class="input-checkbox">
                                        <label class="checkbox" for="terms">Tôi Đã Đọc Và Đồng Ý<a target="_blank" href="terms-and-conditions.html"></a> <span class="required">*</span></label>
                                        <input type="hidden" value="1" name="terms-field">
                                    </p>
                                    <input type="submit" data-value="Place order" value="Thanh Toán" class="button alt">
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .container -->
</div>
@stop
