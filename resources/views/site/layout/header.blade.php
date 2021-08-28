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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/techmarket-font-awesome.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick-style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style-rtl.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/orange.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/common/plugins/validation/css/validate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/common/plugins/toast/css/toast.min.css')}}">

    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/common/images/logo/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset('assets/common/images/logo/android-chrome-512x512.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{asset('assets/common/images/logo/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/common/images/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/common/images/logo/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('assets/common/images/logo/favicon.ico')}}" type="image/x-icon">

    @yield('site_css')

</head>

@yield('site_body')

<div id="page" class="hfeed site">

    <header id="masthead" class="site-header header-v3" style="background-image: none;">

        <div class="col-full desktop-only">
            <div class="techmarket-sticky-wrap">
                <div class="row">

                    <div class="site-branding">
                        <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                            <img src="{{asset('assets/common/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>

                    @include('site.layout.categories.desktop.index')

                </div>

            </div>

        </div>

        <div class="col-full handheld-only">
            <div class="handheld-header">
                <div class="row">
                    <div class="site-branding">
                        <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                            <img src="{{asset('assets/common/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>

                </div>

                @include('site.layout.categories.android.index')

            </div>

        </div>

    </header>
