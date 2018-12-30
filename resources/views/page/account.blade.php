@extends('page.master2')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

            <nav class="woocommerce-breadcrumb">
                <a href="home.html">Home</a>
                <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                My Account
            </nav><!-- .woocommerce-breadcrumb -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-8" class="hentry">

                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="customer-login-form">
                                    {{--<span class="or-text">or</span>--}}

                                    <div class="col2-set" id="customer_login">

                                        <div class="col-1">


                                            <h2>Login</h2>

                                            <form  {{route('page.post_account')}} method="post"  class="login">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                @if(Session::has('flash'))
                                                <div class="alert alert-{{Session::get('flash')}}" >{{Session::get('message')}}</div>
                                                @endif
                                                <p class="before-login-text">
                                                    Chào Mừng Bạn Đã Trở Lại! Đăng Nhập Tài Khoản Của Bạn
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <label for="email"> Email address
                                                        <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="email" id="email" value="">
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <label for="password">Password
                                                        <span class="required">*</span></label>
                                                    <input class="input-text" type="password" name="password" id="password">
                                                </p>


                                                <p class="form-row">
                                                    <input class="button" type="submit" value="Đăng Nhập" name="login">
                                                    <label for="rememberme" class="inline">
                                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Nhớ Mật Khẩu
                                                    </label>
                                                </p>

                                                <p class="lost_password">
                                                    <a href="login-and-register.html"> Quên Mật Khẩu </a>
                                                </p>

                                            </form>


                                        </div><!-- .col-1 -->

                                        {{--<div class="col-2">--}}

                                            {{--<h2>Đăng Ký</h2>--}}

                                            {{--<form method="post" class="register">--}}

                                                {{--<p class="before-register-text">--}}
                                                    {{--Tạo Tài Khoản Mới--}}
                                                {{--</p>--}}
                                                {{--<p class="form-row form-row-wide">--}}
                                                    {{--<label for="password"> Họ Và Tên--}}
                                                        {{--<span class="required">*</span></label>--}}
                                                    {{--<input class="input-text" type="text" name="nname" id="name">--}}
                                                {{--</p>--}}

                                                {{--<p class="form-row form-row-wide">--}}
                                                    {{--<label for="reg_email">Email address--}}
                                                        {{--<span class="required">*</span></label>--}}
                                                    {{--<input type="email" class="input-text" name="email" id="reg_email" value="">--}}
                                                {{--</p>--}}
                                                {{--<p class="form-row form-row-wide">--}}
                                                    {{--<label for="password"> Số Điện Thoại--}}
                                                        {{--<span class="required">*</span></label>--}}
                                                    {{--<input class="input-text" type="tel" name="phone" id="phone">--}}
                                                {{--</p>--}}
                                                {{--<p class="form-row form-row-wide">--}}
                                                    {{--<label for="password">Password--}}
                                                        {{--<span class="required">*</span></label>--}}
                                                    {{--<input class="input-text" type="password" name="password" id="password">--}}
                                                {{--</p>--}}

                                                {{--<p class="form-row">--}}
                                                    {{--<input type="submit" class="button" name="register" value="Đăng Ký">--}}
                                                {{--</p>--}}

                                                {{--<div class="register-benefits">--}}
                                                    {{--<h3>Sign up today and you will be able to :</h3>--}}
                                                    {{--<ul>--}}
                                                        {{--<li>Speed your way through checkout</li>--}}
                                                        {{--<li>Track your orders easily</li>--}}
                                                        {{--<li>Keep a record of all your purchases</li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}

                                            {{--</form>--}}

                                        {{--</div><!-- .col-2 -->--}}

                                    </div><!-- .col2-set -->

                                </div><!-- /.customer-login-form -->
                            </div><!-- .woocommerce -->
                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </main><!-- #main -->
            </div><!-- #primary -->


        </div><!-- .col-full -->
    </div>
@endsection
