<div id="departments-menu" class="dropdown departments-menu">

    <button id="btn_menu" class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <i class="tm tm-departments-thin"></i>
        <span>همه دسته بندیها</span>
    </button>

    <ul style="display: none;" id="menu-departments-menu"
        class="dropdown-menu yamm departments-menu-dropdown">

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
                        <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="{{$value->path()}}">{{$value->name}}<span
                                class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">

                                    <div class="row yamm-content-row">

                                        @foreach($value->sub as $item)

                                            <div class="col-md-6 col-sm-12">
                                                <div class="kc-col-container">
                                                    <div class="kc_text_block">
                                                        <ul>
                                                            <li class="nav-title"
                                                                style="font-weight: bold;font-size: 18px"><a
                                                                    href="{{$item->path()}}">{{$item->name}}</a></li>

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

                    <li class="menu-item menu-item-type-custom animate-dropdown">
                        <a title="{{$value->name}}" href="{{$value->path()}}">{{$value->name}}</a>
                    </li>

                @endif

            @endforeach

        @endif

    </ul>
</div>

<form class="navbar-search" method="get" action="{{route('products.search')}}">
    <label class="sr-only screen-reader-text" for="search">جستجو:</label>
    <div class="input-group">

        <input onkeyup="this.value=removeSpaces(this.value)" type="search" id="search"
               class="form-control search-field product-search-field"
               dir="rtl" value="{{request()->input('search')}}" name="search"
               placeholder="جستحوی محصولات (نام،دسته بندی و برند)"/>

        <div class="input-group-btn input-group-append">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-search"></i>
                <span class="search-btn">جستجو</span>
            </button>
        </div>

    </div>
</form>

<ul id="site-header-cart" class="site-header-cart menu">
    <li class="animate-dropdown dropdown ">
        <a class="cart-contents" href="{{route('cart.index')}}" data-toggle="dropdown"
           title="سبد خرید خود را مشاهده کنید">
            <i class="tm tm-shopping-bag"></i>
            <span class="count">{{$basketBuy_count}}</span>
            <span class="amount">
									<span class="price-label">سبد خرید</span></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-mini-cart">
            <li>
                <div class="widget woocommerce widget_shopping_cart">
                    <div class="widget_shopping_cart_content">

                        <ul class="woocommerce-mini-cart cart_list product_list_widget">

                            @if (count($basketBuy_data))

                                @foreach($basketBuy_data as $data)

                                    @php
                                        $sum=0
                                    @endphp

                                    @foreach($data as $value)

                                        <li class="woocommerce-mini-cart-item mini_cart_item">

                                            <a href="{{route('cart.destroy',$value['id'])}}"
                                               onclick="destroyCartItem(event, {{ $value['id'] }})"
                                               class="remove" aria-label="این مورد را حذف کنید">×</a>
                                            <form action="{{ route('cart.destroy', \Vinkla\Hashids\Facades\Hashids::encode($value['id'])) }}"
                                                  method="post" id="destroy-CartItem-{{ $value['id'] }}">
                                                @csrf
                                                @method('delete')
                                            </form>

                                            <a href="{{$value['route']}}">
                                                <img src="{{$value['image']}}"
                                                     class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                     alt="{{$value['name']}}">{{$value['name']}}
                                            </a>
                                            <span class="quantity">{{$value['count']}} ×
														<span
                                                            class="woocommerce-Price-amount amount">{{number_format($value['price'])}} تومان</span>
													</span>
                                        </li>

                                        @php
                                            $sum+=($value['price']*$value['count']);
                                        @endphp

                                    @endforeach

                                @endforeach

                            @endif

                        </ul>

                        <p class="woocommerce-mini-cart__total total">
                            <strong>جمع کل:</strong>
                            <span class="woocommerce-Price-amount amount">{{number_format($sum)}} تومان</span>
                        </p>
                        <p class="woocommerce-mini-cart__buttons buttons">
                            <a href="{{route('cart.index')}}" class="button wc-forward">نمایش سبد</a>
                            <a href="checkout.html" class="button checkout wc-forward">صورتحساب</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </li>
</ul>
