@extends('page.master2')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

            <nav class="woocommerce-breadcrumb"><a href="<?php echo route('page.home') ?>">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>{{$danhmuclist[10]->ten_danh_muc_san_pham}}</nav>

            <div id="primary" class="content-area">
                <main id="main" class="site-main">



                    <header class="page-header">
                        <h1 class="page-title">{{$danhmuclist[10]->ten_danh_muc_san_pham}}</h1>
                    </header>

                    <div class="shop-control-bar">
                        <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                        <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15" selected="selected">Show 15</option><option value="-1">Show All</option></select></form>
                        <nav class="electro-advanced-pagination">
                            <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1"></form> of 2<a class="next page-numbers" href="#">→</a>			<script>
                                jQuery(document).ready(function($){
                                    $( '.form-adv-pagination' ).on( 'submit', function() {
                                        var link 		= '#',
                                            goto_page 	= $( '#goto-page' ).val(),
                                            new_link 	= link.replace( '%#%', goto_page );

                                        window.location.href = new_link;
                                        return false;
                                    });
                                });
                            </script>
                        </nav>
                    </div>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
                            <ul class="products columns-3">
                                @foreach($shop1 as $item)
                                <li class="product">
                                    <div class="product-outer" style="height: 391px;">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>{{$item->ten_san_pham}}</h3>
                                                <div class="product-thumbnail">
                                                    <img src="{{url($item->images_san_pham)}}" alt="">
                                                </div>
                                            </a>
                                            <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount">{{$item->gia_goc}}</span></ins>
                                                    <del><span class="amount">{{$item->gia_ban}}</span></del>
                                                </span>
                                            </span>
                                                <a rel="nofollow" href="{{route('addcart',$item->id)}}" class="button add_to_cart_button">Thêm Vào Giỏ</a>
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
                                @endforeach
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="grid-extended" aria-expanded="true">

                            <ul class="products columns-3">
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                            <a href="single-product.html">
                                                <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                <div class="product-thumbnail">
                                                    <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                </div>

                                                <div class="product-rating">
                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                </div>

                                                <div class="product-short-description">
                                                    <ul>
                                                        <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Flash storage</span></li>
                                                        <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                        <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                    </ul>
                                                </div>

                                                <div class="product-sku">SKU: 5487FB8/15</div>
                                            </a>
                                            <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                                    <del><span class="amount">$2,299.00</span></del>
                                </span>
                            </span>
                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                        </div>					<div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="true">

                            <ul class="products columns-3">
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">

                                                    <div class="availability in-stock">
                                                        Availablity: <span>In stock</span>
                                                    </div>


                                                    <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                    <span class="feedback">Product added!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                    <a rel="nofollow" href="#">Wishlist</a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="list-view-small" aria-expanded="true">

                            <ul class="products columns-3">
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product list-view list-view-small">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="single-product.html">
                                                <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                        <div class="product-short-description">
                                                            <ul style="padding-left: 18px;">
                                                                <li>4.5 inch HD Screen</li>
                                                                <li>Android 4.4 KitKat OS</li>
                                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                                <li>20 MP front Camera</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="price-add-to-cart">
                                                        <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->
                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-control-bar-bottom">
                        <form class="form-electro-wc-ppp">
                            <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
                        </form>
                        <p class="woocommerce-result-count">Showing 1–15 of 20 results</p>
                        <nav class="woocommerce-pagination">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a href="#" class="page-numbers">2</a></li>
                                <li><a href="#" class="next page-numbers">→</a></li>
                            </ul>
                        </nav>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .container -->
    </div>
@stop
