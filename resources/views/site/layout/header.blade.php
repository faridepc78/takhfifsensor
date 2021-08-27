<!DOCTYPE html>
<html lang="fa-IR" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    @yield('site_title')

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/font-awesome.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/font-techmarket.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/techmarket-font-awesome.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick-style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style-rtl.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/orange.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/common/plugins/validation/css/validate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/common/plugins/toast/css/toast.min.css')}}">

    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/common/images/logo/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/common/images/logo/android-chrome-512x512.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/common/images/logo/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/common/images/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/common/images/logo/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('assets/common/images/logo/favicon.ico')}}" type="image/x-icon">

    @yield('site_css')

</head>

<body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header header-v3" style="background-image: none;">

        <div class="col-full desktop-only">
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <div class="site-branding">
                        <a href="home-v1.html" class="custom-logo-link" rel="home">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #333e48;
                                        }

                                        .cls-1 {
                                            fill-rule: evenodd;
                                        }

                                        .cls-3 {
                                            fill: #3265b0;
                                        }
                                    </style>
                                </defs>
                                <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                            </svg>
                        </a>

                    </div>

                    <div id="departments-menu" class="dropdown departments-menu">

                        <button id="btn_menu" class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="tm tm-departments-thin"></i>
                            <span>همه دسته بندیها</span>
                        </button>

                        <ul style="display: none;" id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">

                            <li class="highlight menu-item animate-dropdown">
                                <a title="پرطرفدارترین ها" href="home-v2.html">پرطرفدارترین ها</a>
                            </li>
                            <li class="highlight menu-item animate-dropdown">
                                <a title="صد پیشنهاد برتر" href="home-v3.html">صد پیشنهاد برتر</a>
                            </li>
                            <li class="highlight menu-item animate-dropdown">
                                <a title="جدیدترین ها" href="home-v4.html">جدیدترین ها</a>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">کامپیوتر و لپ تاپ ها <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                        <div class="yamm-content">
                                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="kc-col-container">
                                                    <div class="kc_single_image">
                                                        <img src="assets/frontend/images/megamenu.jpg" class="" alt="" />
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row yamm-content-row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="kc-col-container">
                                                        <div class="kc_text_block">
                                                            <ul>
                                                                <li class="nav-title">کامپیوتر و لوازم جانبی</li>
                                                                <li><a href="shop.html">همه کامپیوترها و لوازم جانبی</a></li>
                                                                <li><a href="shop.html">لپ تاپ ها، رومیزی ها و مانیتور ها</a></li>
                                                                <li><a href="shop.html">درایوها، درایوهای هارد و کارت حافظه</a></li>
                                                                <li><a href="shop.html">پرینترها</a></li>
                                                                <li><a href="shop.html">دستگاه های شبکه و اینترنت</a></li>
                                                                <li><a href="shop.html">لوازم جانبی رایانه</a></li>
                                                                <li><a href="shop.html">نرم افزارها</a></li>
                                                                <li class="nav-divider"></li>
                                                                <li>
                                                                    <a href="shop.html">
                                                                        <span class="nav-text">تمام الکترونیک ها</span>
                                                                        <span class="nav-subtext">کشف محصولات بیشتر</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-6 col-sm-12">
                                                    <div class="kc-col-container">
                                                        <div class="kc_text_block">
                                                            <ul>
                                                                <li class="nav-title">دفتر و لوازم التحریر</li>
                                                                <li><a href="shop.html">همه دفتر و لوازم التحریرها</a></li>
                                                                <li><a href="shop.html">خودکار و رایترها</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-type-custom animate-dropdown">
                                <a title="گجت ها" href="landing-page-v1.html">گجت ها</a>
                            </li>

                            <li class="menu-item menu-item-type-custom animate-dropdown">
                                <a title="واقعیت مجازی" href="landing-page-v2.html">واقعیت مجازی</a>
                            </li>

                        </ul>
                    </div>


                    <form class="navbar-search" method="get" action="home-v1.html">
                        <label class="sr-only screen-reader-text" for="search">جستجو:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field product-search-field" dir="rtl" value="" name="s" placeholder="جستحوی محتوای سایت" />

                            <div class="input-group-btn input-group-append">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                    <span class="search-btn">جستجو</span>
                                </button>
                            </div>

                        </div>

                    </form>

                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="سبد خرید خود را مشاهده کنید">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">2</span>
                                <span class="amount">
									<span class="price-label">سبد خرید</span></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="این مورد را حذف کنید" data-product_id="65" data-product_sku="">×</a>
                                                    <a href="single-product-sidebar.html">
                                                        <img src="assets/frontend/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">هدفون بی سیم بیتس
                                                    </a>
                                                    <span class="quantity">1 ×
														<span class="woocommerce-Price-amount amount">64.999 هزار تومان</span>
													</span>
                                                </li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="این مورد را حذف کنید" data-product_id="27" data-product_sku="">×</a>
                                                    <a href="single-product-sidebar.html">
                                                        <img src="assets/frontend/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">هدفون بی سیم بیتس
                                                    </a>
                                                    <span class="quantity">1 ×
														<span class="woocommerce-Price-amount amount">64.999 هزار تومان</span>
													</span>
                                                </li>
                                            </ul>
                                            <!-- .cart_list -->
                                            <p class="woocommerce-mini-cart__total total">
                                                <strong>جمع کل:</strong>
                                                <span class="woocommerce-Price-amount amount">136.909 هزار تومان</span>
                                            </p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="cart.html" class="button wc-forward">نمایش سبد</a>
                                                <a href="checkout.html" class="button checkout wc-forward">صورتحساب</a>
                                            </p>
                                        </div>
                                        <!-- .widget_shopping_cart_content -->
                                    </div>
                                    <!-- .widget_shopping_cart -->
                                </li>
                            </ul>
                            <!-- .dropdown-menu-mini-cart -->
                        </li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="col-full handheld-only">
            <div class="handheld-header">
                <div class="row">
                    <div class="site-branding">
                        <a href="home-v1.html" class="custom-logo-link" rel="home">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #333e48;
                                        }

                                        .cls-1 {
                                            fill-rule: evenodd;
                                        }

                                        .cls-3 {
                                            fill: #3265b0;
                                        }
                                    </style>
                                </defs>
                                <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                            </svg>
                        </a>

                    </div>

                    <div class="handheld-header-links">
                        <ul class="columns-3">
                            <li class="my-account">
                                <a href="login-and-register.html" class="has-icon">
                                    <i class="tm tm-login-register"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="wishlist.html" class="has-icon">
                                    <i class="tm tm-favorites"></i>
                                    <span class="count">3</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="compare.html" class="has-icon">
                                    <i class="tm tm-compare"></i>
                                    <span class="count">3</span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="techmarket-sticky-wrap">
                    <div class="row">
                        <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                            <button class="btn navbar-toggler" type="button">
                                <i class="tm tm-departments-thin"></i>
                                <span>منو</span>
                            </button>
                            <div class="handheld-navigation-menu">
                                <span class="tmhm-close">Close</span>
                                <ul id="menu-departments-menu-1" class="nav">
                                    <li class="highlight menu-item animate-dropdown">
                                        <a title="" href="shop.html">برترین های روز</a>
                                    </li>
                                    <li class="highlight menu-item animate-dropdown">
                                        <a title="" href="shop.html">پیشنهادات ویژه</a>
                                    </li>
                                    <li class="highlight menu-item animate-dropdown">
                                        <a title="" href="shop.html">جدیدترین ها</a>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">کامپیوتر و لپ تاپ ها <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">کامپیوتر و لپ تاپ ها</li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه لوازم الکتریکی</span>
                                                                                <span class="nav-subtext">دیدن محصولات بیشتر</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">لوازم اداری</li>
                                                                        <li><a href="shop.html">تمامی لوازم اداری</a></li>
                                                                        <li><a href="shop.html">خودکار و مداد</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">دوربین های عکاسی <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu-1.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دوربین های عکاسی</li>
                                                                        <li><a href="shop.html">همه دوربین های عکاسی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li><a href="shop.html">عنوان دسته بندی</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه دوربین های عکاسی</span>
                                                                                <span class="nav-subtext">دیدن محصولات بیشتر</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">صدا و تصویر</li>
                                                                        <li><a href="shop.html">تمامی صدا و تصویر</a></li>
                                                                        <li><a href="shop.html">هدفون و اسپیکر</a></li>
                                                                        <li><a href="shop.html">سیستم های خانگی</a></li>
                                                                        <li><a href="shop.html">رسانه ها</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">گوشی های موبایل و تبلت<span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">گوشی های موبایل و تبلت</li>
                                                                        <li><a href="shop.html">همه گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li><a href="shop.html">گوشی های موبایل و تبلت</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه گوشی های موبایل</span>
                                                                                <span class="nav-subtext">دیدن محصولات بیشتر</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دفتر و لوازم التحریر</li>
                                                                        <li><a href="shop.html">همه دفتر و لوازم التحریر</a></li>
                                                                        <li><a href="shop.html">قلم و نوشتن افزار</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">بازی های ویدئویی و کنسول ها <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu-1.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دوربین های عکاسی</li>
                                                                        <li><a href="shop.html">همه دوربین های عکاسی</a></li>
                                                                        <li><a href="shop.html">دوربین های شکاری</a></li>
                                                                        <li><a href="shop.html">لنزها</a></li>
                                                                        <li><a href="shop.html">لوازم جانبی دوربین</a></li>
                                                                        <li><a href="shop.html">دوربین های امنیتی</a></li>
                                                                        <li><a href="shop.html">تلسکوپ ها</a></li>
                                                                        <li><a href="shop.html">دوربین فیلمبرداری</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه لوازم جانبی</span>
                                                                                <span class="nav-subtext">محصولات بیشتر ببینید</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">سیستم های صوتی</li>
                                                                        <li><a href="shop.html">همه سیستم های صوتی</a></li>
                                                                        <li><a href="shop.html">هدفون ها</a></li>
                                                                        <li><a href="shop.html">سیستم های خانگی</a></li>
                                                                        <li><a href="shop.html">ام پی تری ها</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">تلویزیون ها <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">سیستم های خانگی</li>
                                                                        <li><a href="shop.html">همه سیستم های خانگی</a></li>
                                                                        <li><a href="shop.html">لپ تاپ ها</a></li>
                                                                        <li><a href="shop.html">کارت های حافظه</a></li>
                                                                        <li><a href="shop.html">پرینتر ها</a></li>
                                                                        <li><a href="shop.html">کارت های شبکه</a></li>
                                                                        <li><a href="shop.html">لوازم جانبی</a></li>
                                                                        <li><a href="shop.html">نرم افزارها</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه لوازم الکترونیک</span>
                                                                                <span class="nav-subtext">محصولات بیشتر ببینید</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دفتر و لوازم التحریر</li>
                                                                        <li><a href="shop.html">همه دفتر و لوازم التحریر</a></li>
                                                                        <li><a href="shop.html">قلم و نوشتن افزار</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">جی پی اس و لوازم خودرو <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu-1.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دوربین های عکاسی</li>
                                                                        <li><a href="shop.html">همه دوربین های عکاسی</a></li>
                                                                        <li><a href="shop.html">دوربین های شکاری</a></li>
                                                                        <li><a href="shop.html">لنزها</a></li>
                                                                        <li><a href="shop.html">لوازم جانبی دوربین</a></li>
                                                                        <li><a href="shop.html">دوربین های امنیتی</a></li>
                                                                        <li><a href="shop.html">تلسکوپ ها</a></li>
                                                                        <li><a href="shop.html">دوربین فیلمبرداری</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه لوازم جانبی</span>
                                                                                <span class="nav-subtext">محصولات بیشتر ببینید</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">سیستم های صوتی</li>
                                                                        <li><a href="shop.html">همه سیستم های صوتی</a></li>
                                                                        <li><a href="shop.html">هدفون ها</a></li>
                                                                        <li><a href="shop.html">سیستم های خانگی</a></li>
                                                                        <li><a href="shop.html">ام پی تری ها</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">لوازم جانبی <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="assets/frontend/images/megamenu.jpg" class="" alt="" />
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row yamm-content-row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">سیستم های خانگی</li>
                                                                        <li><a href="shop.html">همه سیستم های خانگی</a></li>
                                                                        <li><a href="shop.html">لپ تاپ ها</a></li>
                                                                        <li><a href="shop.html">کارت های حافظه</a></li>
                                                                        <li><a href="shop.html">پرینتر ها</a></li>
                                                                        <li><a href="shop.html">کارت های شبکه</a></li>
                                                                        <li><a href="shop.html">لوازم جانبی</a></li>
                                                                        <li><a href="shop.html">نرم افزارها</a></li>
                                                                        <li class="nav-divider"></li>
                                                                        <li>
                                                                            <a href="shop.html">
                                                                                <span class="nav-text">همه لوازم الکترونیک</span>
                                                                                <span class="nav-subtext">محصولات بیشتر ببینید</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title">دفتر و لوازم التحریر</li>
                                                                        <li><a href="shop.html">همه دفتر و لوازم التحریر</a></li>
                                                                        <li><a href="shop.html">قلم و نوشتن افزار</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Gadgets" href="shop.html">گجت ها</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Virtual Reality" href="shop.html">واضعیت مجازی</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>

                        <div class="site-search">
                            <div class="widget woocommerce widget_product_search">
                                <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">جستجو برای:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="جستجو در میان محصولات ..." value="" name="s" />
                                    <input type="submit" value="Search" />
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>

                        </div>

                        <a class="handheld-header-cart-link has-icon" href="cart.html" title="">
                            <i class="tm tm-shopping-bag"></i>
                            <span class="count">2</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </header>
