@extends('page.master')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="home-v1-slider">
                        <!-- ========================================== SECTION – HERO : END========================================= -->

                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                            <div class="item" style="background-image: url('http://localhost/pien/public/page/assets/images/slider/banner-2.jpg');">

                            </div><!-- /.item -->


                            <div class="item" style="background-image: url('http://localhost/pien/public/page/assets/images/slider/banner-1.jpg');">

                            </div><!-- /.item -->

                            <div class="item" style="background-image: url('http://localhost/pien/public/page/assets/images/slider/banner-3.jpg');">

                            </div><!-- /.item -->


                        </div><!-- /.owl-carousel -->

                        <!-- ========================================= SECTION – HERO : END ========================================= -->

                    </div><!-- /.home-v1-slider -->
                    <div class="home-v1-ads-block animate-in-view fadeIn animated" data-animation="fadeIn">
                        <div class="ads-block row">
                            <div class="ad col-xs-12 col-sm-4">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img data-echo="assets/images/banner/cameras.jpg" src="assets/images/blank.gif"
                                             alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <div class="ad-text">
                                            Catch Big <br><strong>Deals</strong> on the <br>Cameras
                                        </div>
                                        <div class="ad-action">
                                            <a href="#">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ad col-xs-12 col-sm-4">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img data-echo="assets/images/banner/MobileDevicesv2-2.jpg"
                                             src="assets/images/blank.gif" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <div class="ad-text">
                                            Tablets,<br> Smartphones<br> <strong>and more</strong>
                                        </div>
                                        <div class="ad-action">
                                            <a href="#"><span class="upto"><span class="prefix">Upto</span><span
                                                        class="value">70</span><span class="suffix"></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ad col-xs-12 col-sm-4">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img data-echo="assets/images/banner/DesktopPC.jpg"
                                             src="assets/images/blank.gif" alt="">
                                    </div>
                                    <div class="media-body media-middle">
                                        <div class="ad-text">
                                            Shop the <br><strong>Hottest</strong><br> Products
                                        </div>
                                        <div class="ad-action">
                                            <a href="#">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated"
                         data-animation="fadeIn">



                        <div class="tabs-block col-lg-12">
                            <div class="products-carousel-tabs">
                                <ul class="nav nav-inline">
                                    <li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">Sản Phẩm Mới</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab-products-3" data-toggle="tab">Sản Phẩm Bán Chạy</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                                        <div class="woocommerce columns-3">
                                            <ul class="products columns-3">
                                            @foreach($product_moi as $item)
                                                <li class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            {{--<span class="loop-product-categories">--}}
                                                                {{--<a href="product-category.html" rel="tag">Laptops</a>--}}
                                                            {{--</span>--}}
                                                            <a href="{{route('page.san_pham_chi_tiet',$item->id)}}">
                                                                <h3>{{$item->ten_san_pham}}</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="{{url('pubilc/page/assets/images/blank.gif')}}" data-echo="{{url($item->images_san_pham)}}" class="img-responsive" alt="">
                                                                </div>
                                                            </a>
                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">{{$item->gia_goc}}</span></ins>
                                                                    <del><span class="amount">{{$item->gia_ban}}</span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
                                                            <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Thêm Vào Giỏ</a>
                                                        </div><!-- /.price-add-to-cart -->
                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Yêu Thích</a>
                                                                <a href="compare.html" class="add-to-compare-link"> So Sánh</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li><!-- /.products -->
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-products-3" role="tabpanel">
                                        <div class="woocommerce columns-3">
                                            <ul class="products columns-3">
                                                @foreach($product_banchay as $item)
                                                    <li class="product ">
                                                        <div class="product-outer">
                                                            <div class="product-inner">
                                                                {{--<span class="loop-product-categories">--}}
                                                                {{--<a href="product-category.html" rel="tag">Laptops</a>--}}
                                                                {{--</span>--}}
                                                                <a href="single-product.html">
                                                                    <h3>{{$item->ten_san_pham}}</h3>
                                                                    <div class="product-thumbnail">
                                                                        <img src="{{url('pubilc/page/assets/images/blank.gif')}}" data-echo="{{url($item->images_san_pham)}}" class="img-responsive" alt="">
                                                                    </div>
                                                                </a>
                                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">{{$item->gia_goc}}</span></ins>
                                                                    <del><span class="amount">{{$item->gia_ban}}</span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
                                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Thêm Vào Giỏ</a>
                                                                </div><!-- /.price-add-to-cart -->
                                                                <div class="hover-area">
                                                                    <div class="action-buttons">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Yêu Thích</a>
                                                                        <a href="compare.html" class="add-to-compare-link"> So Sánh</a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.product-inner -->
                                                        </div><!-- /.product-outer -->
                                                    </li><!-- /.products -->
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="tab-pane active" id="tab-products-3" role="tabpanel">--}}
                                {{--<div class="woocommerce columns-3">--}}
                                    {{--<ul class="products columns-3">--}}
                                        {{--@foreach($product as $item)--}}
                                            {{--<li class="product ">--}}
                                                {{--<div class="product-outer">--}}
                                                    {{--<div class="product-inner">--}}
                                                        {{--<span class="loop-product-categories">--}}
                                                        {{--<a href="product-category.html" rel="tag">Laptops</a>--}}
                                                        {{--</span>--}}
                                                        {{--<a href="single-product.html">--}}
                                                            {{--<h3>{{$item->ten_san_pham}}</h3>--}}
                                                            {{--<div class="product-thumbnail">--}}
                                                                {{--<img src="{{url('pubilc/page/assets/images/blank.gif')}}" data-echo="{{url($item->images_san_pham)}}" class="img-responsive" alt="">--}}
                                                            {{--</div>--}}
                                                        {{--</a>--}}
                                                        {{--<div class="price-add-to-cart">--}}
                                                            {{--<span class="price">--}}
                                                                {{--<span class="electro-price">--}}
                                                                    {{--<ins><span class="amount">{{$item->gia_goc}}</span></ins>--}}
                                                                    {{--<del><span class="amount">{{$item->gia_ban}}</span></del>--}}
                                                                    {{--<span class="amount"> </span>--}}
                                                                {{--</span>--}}
                                                            {{--</span>--}}
                                                            {{--<a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Thêm Vào Giỏ</a>--}}
                                                        {{--</div><!-- /.price-add-to-cart -->--}}
                                                        {{--<div class="hover-area">--}}
                                                            {{--<div class="action-buttons">--}}
                                                                {{--<a href="#" rel="nofollow" class="add_to_wishlist">Yêu Thích</a>--}}
                                                                {{--<a href="compare.html" class="add-to-compare-link"> So Sánh</a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div><!-- /.product-inner -->--}}
                                                {{--</div><!-- /.product-outer -->--}}
                                            {{--</li><!-- /.products -->--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div><!-- /.tabs-block -->
                    </div><!-- /.deals-and-tabs -->
                    <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
                    <section class="products-2-1-2 animate-in-view fadeIn animated" data-animation="fadeIn">
                        <h2 class="sr-only">Products Grid</h2>
                        <div class="container">
                            <ul class="nav nav-inline nav-justified">

                                {{--<li class="nav-item"><a href="shop.html" class="active nav-link">Best Deals</a></li>--}}
                                {{--@foreach($danhmuc as $item)--}}
                                <li class="active nav-link"><a  href="{{route('page.shop1')}}">{{$danhmuclist[0]->ten_danh_muc_san_pham}}</a></li>
                                {{--@endforeach--}}
                            </ul>
                            <div class="columns-2-1-2">
                                <ul class="products exclude-auto-height">
                                    <li class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                {{--<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>--}}
                                                <a href="single-product.html">
                                                    <h3>{{$product_mtxt[0]->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail"><img data-echo="{{url($product_mtxt[0]->images_san_pham)}}" src="assets/images/blank.gif" alt=""></div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$product_mtxt[0]->gia_goc}}</span></ins>
                                                            <del><span class="amount">{{$product_mtxt[0]->gia_ban}}</span></del>
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}"class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </li>
                                    <li class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                {{--<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>--}}
                                                <a href="single-product.html">
                                                    <h3>{{$product_mtxt[1]->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail">
                                                        <img data-echo="{{url($product_mtxt[1]->images_san_pham)}}" src="assets/images/blank.gif" alt="">
                                                    </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$product_mtxt[1]->gia_goc}}</span></ins>
                                                            <del><span class="amount">{{$product_mtxt[1]->gia_ban}}</span></del>
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </li>
                                </ul>
                                <ul class="products exclude-auto-height product-main-2-1-2">
                                    <li class="last product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                {{--<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>--}}
                                                <a href="single-product.html">
                                                    <h3>{{$product_mtxt[2]->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail">
                                                        <img class="wp-post-image"
                                                             data-echo="{{url($product_mtxt[2]->images_san_pham)}}"
                                                             src="pien/public/page/assets/images/blank.gif" alt="">
                                                    </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$product_mtxt[2]->gia_goc}}</span></ins>
                                                            <del><span class="amount">{{$product_mtxt[2]->gia_ban}}</span></del>
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist">
                                                            Wishlist</a>

                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </li>
                                </ul>

                                <ul class="products exclude-auto-height">
                                    <li class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                {{--<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>--}}
                                                <a href="single-product.html">
                                                    <h3>{{$product_mtxt[3]->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail">
                                                        <img class="wp-post-image"
                                                             data-echo="{{url($product_mtxt[3]->images_san_pham)}}" src="assets/images/blank.gif" alt="">
                                                    </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$product_mtxt[3]->gia_goc}}</span></ins>
                                                            <del><span class="amount">{{$product_mtxt[3]->gia_ban}}</span></del>
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}"  class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </li>
                                    <li class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                {{--<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>--}}
                                                <a href="single-product.html">
                                                    <h3>{{$product_mtxt[4]->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail">
                                                        <img class="wp-post-image"
                                                             data-echo="{{url($product_mtxt[4]->images_san_pham)}}" src="assets/images/blank.gif" alt="">
                                                    </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$product_mtxt[4]->gia_goc}}</span></ins>
                                                            <del><span class="amount">{{$product_mtxt[4]->gia_ban}}</span></del>
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                        <a href="#" class="add-to-compare-link">Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </section>

                    <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->
                    <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                        <header>
                            <a href="{{route('page.shop2')}}"><h2 class="h1">{{$danhmuclist[1]->ten_danh_muc_san_pham}}</h2></a>
                            {{--<ul class="nav nav-inline">--}}
                                {{--<li class="nav-item active"><span class="nav-link">Top 20</span></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Laptops &amp; Computers</a></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </header>
                        <div id="home-v1-product-cards-careousel">
                            <div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
                                @for($i=0;$i<count($sp);$i++)
                                    @if($i%6==0)
                                    <ul class="products columns-3">
                                    @endif
                                        <li class="product product-card ">
                                            <div class="product-outer">
                                                <div class="media product-inner">
                                                    <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                                        <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{url($sp[$i]->images_san_pham)}}" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                    {{--<span class="loop-product-categories">--}}
                                                        {{--<a href="product-category.html" rel="tag">TVs</a>--}}
                                                    {{--</span>--}}
                                                        <a href="single-product.html">
                                                            <h3>{{$sp[$i]->ten_san_pham}}</h3>
                                                        </a>
                                                        <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$sp[$i]->gia_goc}}</span></ins>
                                                                {{--<span class="amount">{{$sp[$i]->gia_goc}}</span>--}}
                                                            </span>
                                                        </span>
                                                            <a href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->
                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                <a href="#" class="add_to_wishlist">Wishlist</a>
                                                                <a href="#" class="add-to-compare-link">Compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                            @if(($i+1)%6==0 && $i!=0)
                                                </ul>
                                            @endif
                                    @endfor
                            </div>
                        </div><!-- #home-v1-product-cards-careousel -->
                    </section>
                    <div class="home-v1-banner-block animate-in-view fadeIn animated" data-animation="fadeIn">
                        <div class="home-v1-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                            <a href="#"><img src="assets/images/blank.gif" data-echo="assets/images/banner/home-v1-banner.png" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div><!-- /.home-v1-banner-block -->
                    <section
                        class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                        <header>
                            <a href="{{route('page.shop4')}}"><h2 class="h1">{{$danhmuclist[3]->ten_danh_muc_san_pham}}</h2></a>
                            <div class="owl-nav">
                                <a href="#products-carousel-prev" data-target="#recently-added-products-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#products-carousel-next" data-target="#recently-added-products-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </header>
                        <div id="recently-added-products-carousel">
                            <div class="woocommerce columns-6">
                                <div class="products owl-carousel recently-added-products products-carousel columns-6">
                                    @foreach($spdt as $value)
                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>{{$value->ten_san_pham}}</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="assets/images/blank.gif" data-echo="{{url($value->images_san_pham)}}" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                                <div class="price-add-to-cart">
                                                    <span class="price">
                                                        <span class="electro-price">
                                                            <ins><span class="amount">{{$value->gia_ban}}</span></ins>
                                                            {{--<span class="amount"></span>--}}
                                                        </span>
                                                    </span>
                                                    <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->
                                    @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->
                    <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                        <header>
                            <a href="{{route('page.shop3')}}"><h2 class="h1">{{$danhmuclist[2]->ten_danh_muc_san_pham}}</h2></a>
                            {{--<ul class="nav nav-inline">--}}
                            {{--<li class="nav-item active"><span class="nav-link">Top 20</span></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Laptops &amp; Computers</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </header>
                        <div id="home-v1-product-cards-careousel">
                            <div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
                                @for($i=0;$i<count($sp);$i++)
                                    @if($i%6==0)
                                        <ul class="products columns-3">
                                            @endif
                                            <li class="product product-card ">
                                                <div class="product-outer">
                                                    <div class="media product-inner">
                                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{url($sp[$i]->images_san_pham)}}" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            {{--<span class="loop-product-categories">--}}
                                                            {{--<a href="product-category.html" rel="tag">TVs</a>--}}
                                                            {{--</span>--}}
                                                            <a href="single-product.html">
                                                                <h3>{{$sp[$i]->ten_san_pham}}</h3>
                                                            </a>
                                                            <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$sp[$i]->gia_goc}}</span></ins>
                                                                {{--<span class="amount">{{$sp[$i]->gia_goc}}</span>--}}
                                                            </span>
                                                        </span>
                                                                <a href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                            @if(($i+1)%6==0 && $i!=0)
                                        </ul>
                                    @endif
                                @endfor
                            </div>
                        </div><!-- #home-v1-product-cards-careousel -->
                    </section>
                    <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->
                    <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                        <header>
                            <a href="{{route('page.shop5')}}"><h2 class="h1">{{$danhmuclist[4]->ten_danh_muc_san_pham}}</h2></a>
                            {{--<ul class="nav nav-inline">--}}
                            {{--<li class="nav-item active"><span class="nav-link">Top 20</span></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Laptops &amp; Computers</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </header>
                        <div id="home-v1-product-cards-careousel">
                            <div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
                                @for($i=0;$i<count($sp);$i++)
                                    @if($i%6==0)
                                        <ul class="products columns-3">
                                            @endif
                                            <li class="product product-card ">
                                                <div class="product-outer">
                                                    <div class="media product-inner">
                                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{url($sp[$i]->images_san_pham)}}" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            {{--<span class="loop-product-categories">--}}
                                                            {{--<a href="product-category.html" rel="tag">TVs</a>--}}
                                                            {{--</span>--}}
                                                            <a href="single-product.html">
                                                                <h3>{{$sp[$i]->ten_san_pham}}</h3>
                                                            </a>
                                                            <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$sp[$i]->gia_goc}}</span></ins>
                                                                {{--<span class="amount">{{$sp[$i]->gia_goc}}</span>--}}
                                                            </span>
                                                        </span>
                                                                <a href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                            @if(($i+1)%6==0 && $i!=0)
                                        </ul>
                                    @endif
                                @endfor
                            </div>
                        </div><!-- #home-v1-product-cards-careousel -->
                    </section>
                    <!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->
                    <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                        <header>
                            <a href="{{route('page.shop6')}}"><h2 class="h1">{{$danhmuclist[5]->ten_danh_muc_san_pham}}</h2></a>
                            {{--<ul class="nav nav-inline">--}}
                            {{--<li class="nav-item active"><span class="nav-link">Top 20</span></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Laptops &amp; Computers</a></li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </header>
                        <div id="home-v1-product-cards-careousel">
                            <div class="woocommerce columns-3 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
                                @for($i=0;$i<count($sp);$i++)
                                    @if($i%6==0)
                                        <ul class="products columns-3">
                                            @endif
                                            <li class="product product-card ">
                                                <div class="product-outer">
                                                    <div class="media product-inner">
                                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{url($sp[$i]->images_san_pham)}}" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            {{--<span class="loop-product-categories">--}}
                                                            {{--<a href="product-category.html" rel="tag">TVs</a>--}}
                                                            {{--</span>--}}
                                                            <a href="single-product.html">
                                                                <h3>{{$sp[$i]->ten_san_pham}}</h3>
                                                            </a>
                                                            <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$sp[$i]->gia_goc}}</span></ins>
                                                                {{--<span class="amount">{{$sp[$i]->gia_goc}}</span>--}}
                                                            </span>
                                                        </span>
                                                                <a href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                            @if(($i+1)%6==0 && $i!=0)
                                        </ul>
                                    @endif
                                @endfor
                            </div>
                        </div><!-- #home-v1-product-cards-careousel -->
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->

        </div><!-- .container -->
    </div><!-- #content -->
@stop
