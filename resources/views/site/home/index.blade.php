@section('site_title')
    <title>تخفیف سنسور | خانه</title>
@endsection

@section('site_body')
    <body class="organic-market page-template-template-homepage-v1 woocommerce-active">
    @endsection

    @include('site.layout.header')

<div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        @include('site.home.sliders')

                        @include('site.home.features-list')

                        @include('site.home.newest-products')

                        @include('site.home.bestSellers-products')

                        @include('site.home.top-banners')

                        @include('site.home.categories')

                        @include('site.home.bottom-banners')

                        @include('site.home.brands')

                    </main>

                </div>

            </div>

        </div>

    </div>

    @include('site.layout.footer')
