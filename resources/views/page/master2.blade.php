<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Mirrored from transvelo.github.io/electro-html/product-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 13:45:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Electro &#8211; Electronics Ecommerce Theme</title>

    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/font-electro.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/owl-carousel.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('page/assets/css/colors/yellow.css')}}" media="all" />

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="{{url('page/assets/css/config.css')}}">

    <link href="{{url('page/assets/css/colors/green.css" rel="alternate stylesheet')}}" title="Green color">
    <link href="{{url('page/assets/css/colors/pink.css" rel="alternate stylesheet')}}" title="Pink color">
    <link href="{{url('page/assets/css/colors/blue.css" rel="alternate stylesheet')}}" title="Blue color">
    <link href="{{url('page/assets/css/colors/red.css" rel="alternate stylesheet')}}" title="Red color">
    <link href="{{url('page/assets/css/colors/orange.css" rel="alternate stylesheet')}}" title="Orange color">
    <link href="{{url('page/assets/css/colors/black.css" rel="alternate stylesheet')}}" title="Black color">
    <link href="{{url('page/assets/css/colors/gold.css" rel="alternate stylesheet')}}" title="Gold color">
    <link href="{{url('page/assets/css/colors/yellow.css')}}" rel="alternate stylesheet" title="Yellow color">
    <link href="{{url('page/assets/css/colors/flat-blue.css')}}" rel="alternate stylesheet" title="Flat Blue color">
    <!-- Demo Purpose Only. Should be removed in production : END -->

    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic'
        rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="{{url('page/assets/images/fav-icon.png')}}">
</head>

<body class="page home page-template-default">
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <div class="top-bar">
        <div class="container">
            @if (Auth::check())
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Chào Mừng {{Auth::user()->name}} Đến Mua Sắm Tại Electronics Store</a></li>
                </ul>
            </nav>

            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">

                        {{--<li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>--}}
                        {{--<li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>--}}
                        {{--<li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Shop</a></li>--}}
                        <li class="menu-item animate-dropdown"><a title="My Account" href="{{route('page.post_outaccount')}}"><i class="ec ec-user"></i>Đăng Xuất</a></li>
                </ul>
            </nav>
                @else
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Worldwide Electronics Store</a></li>
                </ul>
            </nav>

            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">

                    {{--<li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>--}}
                    {{--<li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>--}}
                    <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Đăng Ký</a></li>
                    <li class="menu-item animate-dropdown"><a title="My Account" href="{{route('page.account')}}l"><i class="ec ec-user"></i>Đăng Nhập</a></li>
                </ul>
            </nav>

            @endif
        </div>
    </div><!-- /.top-bar -->


    <header id="masthead" class="site-header header-v2">
        <div class="container">
            <div class="row">

                <!-- ============================================================= Header Logo ============================================================= -->
                <div class="header-logo">
                    <a href="<?php echo route('page.home') ?>" class="header-logo-link">
                        <svg version="1.1" x="0px" y="0px" width="175.748px"
                             height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                            <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700"
                                     cx="170.05" cy="36.341" rx="5.32" ry="5.367"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
			C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
			c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
			c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
			c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
			c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
			c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
			c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
			c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
			M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
			c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
			c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
			c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
			c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
			M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
			c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
			c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
			C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
			C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
			c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
			c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
			c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
			C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
			c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
			c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
			c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
			c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
			c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
			c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
			C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
			c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
			c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
			c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
			c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
			c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                        </svg>
                    </a>
                </div>
                <!-- ============================================================= Header Logo : End============================================================= -->

                <div  class="primary-nav animate-dropdown">

                </div>

                <div class="header-support-info">
                    <div class="media">
                        <span class="media-left support-icon media-middle"><i class="ec ec-support"></i></span>
                        <div class="media-body">
                            <span class="support-number"><strong>Support</strong> (+84) 799 352 103</span><br/>
                            <span class="support-email">Email: nguyen@electro.com</span>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </header><!-- #masthead -->
    <nav class="navbar navbar-primary navbar-full">
        <div class="container">
            <ul class="nav navbar-nav departments-menu animate-dropdown">
                <li class="nav-item dropdown ">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle">Danh Mục Sản Phẩm</a>
                    <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                        {{--<li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="product-category.html">Value of the Day</a></li>--}}
                        {{--<li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>--}}
                        {{--<li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color.html">New Arrivals</a></li>--}}
                        @foreach($category_product as $item)
                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                            <a title="Computers &amp; Accessories" href="{{$item->link}}" data-toggle="dropdown"
                               class="dropdown-toggle" aria-haspopup="true">{{$item->ten_danh_muc_san_pham}}</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown menu-item-object-static_block ">
                                    <div class="yamm-content">
                                        <div class="vc_row row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <ul>
                                                                    @foreach($item['con'] as $value)
                                                                    <li><a href="{{$item->link}}">{{$value['ten_loai_san_pham']}}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <form class="navbar-search" method="get" action="http://transvelo.github.io/">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s"
                           placeholder="Search for products"/>

                    <div class="input-group-btn">
                        <input type="hidden" id="search-param" name="post_type" value="product"/>
                        <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                <li class="nav-item dropdown">
                    <a href="cart.html" class="nav-link" data-toggle="dropdown">
                        <i class="ec ec-shopping-bag"></i>
                        <span class="cart-items-count count">{{cart::count()}}</span>
                        <span class="cart-items-total-price total-price"><span
                                class="amount">{{cart::subtotal()}}</span></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    @foreach($cart as $item)
                                    <li class="mini_cart_item">
                                        <a title="Remove this item" class="remove" href="#">×</a>
                                        <a href="single-product.html">
                                            <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                 src="{{url($item->options['img'])}}" alt="">{{$item->name}};&nbsp;
                                        </a>
                                        <span class="quantity">{{$item->qty}} × <span class="amount">{{$item->price}}</span></span>
                                    </li>
                                    @endforeach
                                </ul><!-- end product list -->
                                <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>
                                <p class="buttons">
                                    <a class="button wc-forward" href="{{url('http://localhost/pien/public/MasterDienTu/cart')}}">View Cart</a>
                                    <a class="button checkout wc-forward" href="{{url('http://localhost/pien/public/MasterDienTu/checkout')}}">Checkout</a>
                                </p>


                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                <li class="nav-item">
                    <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
                </li>
            </ul>
            <ul class="navbar-compare nav navbar-nav pull-right flip">
                <li class="nav-item">
                    <a href="compare.html" class="nav-link"><i class="ec ec-compare"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer id="colophon" class="site-footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h5 class="newsletter-title">Electro Sự Lựa Chọn Của Người Tiêu Dùng</h5>

                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <span class="input-group-btn">
								<button class="btn btn-secondary" type="button">Sign Up</button>
							</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-md-push-5">
                    </div><!-- /.col -->
                    <div class="footer-logo">

                        <div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
                            <div class="footer-logo">
                                <svg version="1.1" x="0px" y="0px" width="156px"
                                     height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                    <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341"
                                             rx="5.32" ry="5.367"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
						C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
						c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
						c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
						c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
						c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
						c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
						c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
						c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
						M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
						c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
						c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
						c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
						c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
						M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
						c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
						c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
						C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
						C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
						c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
						c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
						c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
						C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
						c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
						c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
						c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
						c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
						c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
						c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
						C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
						c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
						c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
						c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
						c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
						c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                                </svg>
                            </div><!-- /.footer-contact -->

                            <div class="footer-call-us">
                                <div class="media">
                                    <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                                    <div class="media-body">
                                        <span class="call-us-text">Mọi Thắc Mắc Xin Liên Hệ</span>
                                        <span class="call-us-number">0909 1999 9111 0999</span>
                                    </div>
                                </div>
                            </div><!-- /.footer-call-us -->




                            <div class="footer-address">
                                <strong class="footer-address-title">Contact Info</strong>
                                <address>09 Đường Số 9, Phường Chín, Quận Mười Chín, Thành Phố Khét Lẹt</address>
                            </div><!-- /.footer-address -->

                            <div class="footer-social-icons">
                                <ul class="social-icons list-unstyled">
                                    <li><a class="fa fa-facebook"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-twitter"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-pinterest"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-linkedin"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-google-plus"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-tumblr"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-instagram"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-youtube"
                                           href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                    <li><a class="fa fa-rss" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-call-us">
                        <div class="media">
                            <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                            <div class="media-body">
                                <span class="call-us-text">Got Questions ? Call us 24/7!</span>
                                <span class="call-us-number">(800) 8001-8588, (0600) 874 548</span>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>

        <div class="copyright-bar">
            <div class="container">
                <div class="pull-left flip copyright">&copy; <a
                        href="http://demo2.transvelo.in/html/electro/">Electro</a> - All Rights Reserved
                </div>
                <div class="pull-right flip payment">
                    <div class="footer-payment-logo">
                        <ul class="cash-card card-inline">
                            <li class="card-item"><img src="{{url('page/assets/images/footer/payment-icon/1.png')}}"
                                                       alt="" width="52"></li>
                            <li class="card-item"><img src="{{url('page/assets/images/footer/payment-icon/2.png')}}"
                                                       alt="" width="52"></li>
                            <li class="card-item"><img src="{{url('page/assets/images/footer/payment-icon/3.png')}}"
                                                       alt="" width="52"></li>
                            <li class="card-item"><img src="{{url('page/assets/images/footer/payment-icon/4.png')}}"
                                                       alt="" width="52"></li>
                            <li class="card-item"><img src="{{url('page/assets/images/footer/payment-icon/5.png')}}"
                                                       alt="" width="52"></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production : End -->

<script type="text/javascript" src="{{url('page/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/echo.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('page/assets/js/electro.js')}}"></script>

<!-- For demo purposes – can be removed on production -->

<script src="{{url('page/switchstylesheet/switchstylesheet.js')}}"></script>

<script>
    (function ($) {
        $(document).ready(function () {
            $(".changecolor").switchstylesheet({seperator: "color"});
            $('.show-theme-options').click(function () {
                $(this).parent().toggleClass('open');
                return false;
            });

            $('#home-pages').on('change', function () {
                $.ajax({
                    url: $('#home-pages option:selected').val(),
                    success: function (res) {
                        location.href = $('#home-pages option:selected').val();
                    }
                });
            });

            $('#demo-pages').on('change', function () {
                $.ajax({
                    url: $('#demo-pages option:selected').val(),
                    success: function (res) {
                        location.href = $('#demo-pages option:selected').val();
                    }
                });
            });

            $('#header-style').on('change', function () {
                $.ajax({
                    url: $('#header-style option:selected').val(),
                    success: function (res) {
                        location.href = $('#header-style option:selected').val();
                    }
                });
            });

            $('#shop-style').on('change', function () {
                $.ajax({
                    url: $('#shop-style option:selected').val(),
                    success: function (res) {
                        location.href = $('#shop-style option:selected').val();
                    }
                });
            });

            $('#product-category-col').on('change', function () {
                $.ajax({
                    url: $('#product-category-col option:selected').val(),
                    success: function (res) {
                        location.href = $('#product-category-col option:selected').val();
                    }
                });
            });

            $('#single-products').on('change', function () {
                $.ajax({
                    url: $('#single-products option:selected').val(),
                    success: function (res) {
                        location.href = $('#single-products option:selected').val();
                    }
                });
            });

            $('.style-toggle').on('click', function () {
                $(this).parent('.config').toggleClass('open');
            });
        });
    })(jQuery);
</script>
<!-- For demo purposes – can be removed on production : End -->

</body>

<!-- Mirrored from transvelo.github.io/electro-html/product-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 13:45:23 GMT -->
</html>
