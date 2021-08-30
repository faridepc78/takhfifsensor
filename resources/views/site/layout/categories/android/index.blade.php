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

                    @auth()

                        <li class="highlight menu-item animate-dropdown">
                            <a title="پنل کاربری" href="javascript:void(0)">پنل کاربری</a>
                        </li>

                    @else

                        <li class="highlight menu-item animate-dropdown">
                            <a title="ثبت نام" href="{{route('register')}}">ثبت نام</a>
                        </li>

                        <li class="highlight menu-item animate-dropdown">
                            <a title="ورود" href="{{route('login')}}">ورود</a>
                        </li>

                    @endauth

                    @if (count($categories))

                        @foreach($categories as $value)

                            @if (count($value->sub))

                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="{{$value->name}}" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true"
                                       href="{{$value->path()}}">{{$value->name}}<span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">

                                                <div class="row yamm-content-row">

                                                    @foreach($value->sub as $item)

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title" style="font-weight: bold;font-size: 18px"><a href="{{$item->path()}}">{{$item->name}}</a></li>

                                                                        @if (count($item->sub))

                                                                            @foreach($item->sub as $v)

                                                                                <li><a href="{{$v->path()}}">{{$v->name}}</a>
                                                                                </li>

                                                                            @endforeach

                                                                        @endif

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                </div>

                                            </div>

                                        </li>
                                    </ul>
                                </li>

                            @else

                                <li class="menu-item animate-dropdown">
                                    <a title="{{$value->name}}" href="{{$value->path()}}">{{$value->name}}</a>
                                </li>

                            @endif

                        @endforeach

                    @endif

                </ul>
            </div>

        </nav>

        <div class="site-search">
            <div class="widget woocommerce widget_product_search">
                <form role="search" method="get" class="woocommerce-product-search"
                      action="{{route('products.search')}}">
                    <label class="screen-reader-text" for="search">جستجو
                        برای:</label>
                    <input onkeyup="this.value=removeSpaces(this.value)" type="search" id="search" class="search-field"
                           placeholder="جستحوی محصولات (نام،دسته بندی و برند)" value="{{request()->input('search')}}" name="search"/>
                    <input type="submit" value="Search"/>
                </form>
            </div>

        </div>

        <a class="handheld-header-cart-link has-icon" href="cart.html" title="">
            <i class="tm tm-shopping-bag"></i>
            <span class="count">2</span>
        </a>
    </div>

</div>
