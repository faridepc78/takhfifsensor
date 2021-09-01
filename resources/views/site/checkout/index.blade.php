@section('site_title')
    <title>تخفیف سنسور | صورتحساب</title>
@endsection

@section('site_body')
    <body class="woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase">
    @endsection

@include('site.layout.header')

    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">صفحه اصلی</a>
                    <span class="delimiter">
							<i class="tm tm-arrow-left"></i>
						</span>
                    صورتحساب
                </nav>

                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">

                                    <!-- .collapse -->
                                    <form action="#" class="checkout woocommerce-checkout" method="post" name="checkout">
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>جزئیات صورت حساب</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">

                                                            <p id="billing_country_field" class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_country">کشور
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="billing_country" name="billing_country" tabindex="-1" aria-hidden="true">
                                                                    <option value="">انتخاب کشور خود</option>
                                                                    <option value="AX">ایران</option>
                                                                    <option value="AF">افغانستان</option>
                                                                    <option value="AL">ژآپن</option>
                                                                    <option value="DZ">کره جنوبی</option>
                                                                    <option value="AS">آمریکا</option>
                                                                    <option value="AD">انگلیس</option>
                                                                    <option value="AO">استرالیا</option>
                                                                </select>
                                                            </p>

                                                            <div class="clear"></div>
                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">آدرس محلی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="آدرس محلی" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                            </p>
                                                            <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                                <input type="text" value="" placeholder="نام آپارتمان، شماره واحد" id="billing_address_2" name="billing_address_2" class="input-text ">
                                                            </p>
                                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_city">شهر
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="" id="billing_city" name="billing_city" class="input-text ">
                                                            </p>
                                                            <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_state">استان یا ایالت
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="billing_state" name="billing_state" tabindex="-1" aria-hidden="true">
                                                                    <option value="">انتخاب یک ایالت یا استان</option>
                                                                    <option value="AX">ایران</option>
                                                                    <option value="AF">افغانستان</option>
                                                                    <option value="AL">ژآپن</option>
                                                                    <option value="DZ">کره جنوبی</option>
                                                                    <option value="AS">آمریکا</option>
                                                                    <option value="AD">انگلیس</option>
                                                                    <option value="AO">استرالیا</option>
                                                                </select>
                                                            </p>
                                                            <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                <label class="" for="billing_postcode">کد پستی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text ">
                                                            </p>
                                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                                <label class="" for="billing_phone">تلفن تماس
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="tel" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                                            </p>
                                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                                <label class="" for="billing_email">آدرس ایمیل
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="email" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>
                                                <!-- .woocommerce-billing-fields -->
                                                <div class="woocommerce-account-fields">
                                                    <p class="form-row form-row-wide woocommerce-validated">
                                                        <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#createLogin" aria-controls="createLogin">
                                                            <input type="checkbox" value="1" name="createaccount" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                            <span>ایجاد حساب کاربری</span>
                                                        </label>
                                                    </p>
                                                    <div class="create-account collapse" id="createLogin">
                                                        <p data-priority="" id="account_password_field" class="form-row validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                            <label class="" for="account_password">رمز عبور حساب
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="password" value="" placeholder="رمز عبور" id="account_password" name="account_password" class="input-text ">
                                                        </p>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-account-fields -->
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="col-2">
                                                <div class="woocommerce-shipping-fields">
                                                    <h3 id="ship-to-different-address">
                                                        <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#shipping-address" aria-controls="shipping-address">
                                                            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" value="1" name="ship_to_different_address">
                                                            <span>ارسال به آدرس های مختلف</span>
                                                        </label>
                                                    </h3>
                                                    <div class="shipping_address collapse" id="shipping-address">
                                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                                            <p id="shipping_first_name_field" class="form-row form-row-first validate-required">
                                                                <label class="" for="shipping_first_name">نام
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" autofocus="autofocus" autocomplete="given-name" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                                            </p>
                                                            <p id="shipping_last_name_field" class="form-row form-row-last validate-required">
                                                                <label class="" for="shipping_last_name">نام خانوادگی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" autocomplete="family-name" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="input-text ">
                                                            </p>
                                                            <p id="shipping_company_field" class="form-row form-row-wide">
                                                                <label class="" for="shipping_company">نام شرکت</label>
                                                                <input type="text" autocomplete="organization" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                                            </p>
                                                            <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                                <label class="" for="shipping_country">کشور
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="shipping_country" name="shipping_country" tabindex="-1" aria-hidden="true">
                                                                    <option value="">انتخاب کشور</option>
                                                                    <option value="AX">ایران</option>
                                                                    <option value="AF">افغانستان</option>
                                                                    <option value="AL">ژآپن</option>
                                                                    <option value="DZ">کره جنوبی</option>
                                                                    <option value="AS">آمریکا</option>
                                                                    <option value="AD">انگلیس</option>
                                                                    <option value="AO">استرالیا</option>
                                                                </select>
                                                            </p>
                                                            <p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="shipping_address_1">آدرس محلی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" autocomplete="address-line1" value="" placeholder="نام خیابان محلی" id="shipping_address_1" name="shipping_address_1" class="input-text ">
                                                            </p>
                                                            <p id="shipping_address_2_field" class="form-row form-row-wide address-field">
                                                                <input type="text" autocomplete="address-line2" value="" placeholder="آپارتمان فلان، شماره واحد" id="shipping_address_2" name="shipping_address_2" class="input-text ">
                                                            </p>
                                                            <p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="shipping_city">نام شهر
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" autocomplete="address-level2" value="" placeholder="" id="shipping_city" name="shipping_city" class="input-text ">
                                                            </p>
                                                            <p id="shipping_state_field" class="form-row form-row-wide address-field validate-state woocommerce-invalid woocommerce-invalid-required-field validate-required" data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field">
                                                                <label class="" for="shipping_state">نام ایالت یا استان
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="shipping_state" name="shipping_state" tabindex="-1" aria-hidden="true">
                                                                    <option value="">انتخاب کنید</option>
                                                                    <option value="AX">ایران</option>
                                                                    <option value="AF">افغانستان</option>
                                                                    <option value="AL">ژآپن</option>
                                                                    <option value="DZ">کره جنوبی</option>
                                                                    <option value="AS">آمریکا</option>
                                                                    <option value="AD">انگلیس</option>
                                                                    <option value="AO">استرالیا</option>
                                                                </select>
                                                            </p>
                                                            <p data-priority="90" id="shipping_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                                <label class="" for="shipping_postcode">کد پستی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" autocomplete="postal-code" value="" placeholder="" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                                            </p>
                                                        </div>
                                                        <!-- .woocommerce-shipping-fields__field-wrapper -->
                                                    </div>
                                                    <!-- .shipping_address -->
                                                </div>
                                                <!-- .woocommerce-shipping-fields -->
                                                <div class="woocommerce-additional-fields">
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p id="order_comments_field" class="form-row notes">
                                                            <label class="" for="order_comments">یادداشت سفارش</label>
                                                            <textarea cols="5" rows="2" placeholder="هرچه دله تنگت بنویس." id="order_comments" class="input-text " name="order_comments"></textarea>
                                                        </p>
                                                    </div>
                                                    <!-- .woocommerce-additional-fields__field-wrapper-->
                                                </div>
                                                <!-- .woocommerce-additional-fields -->
                                            </div>
                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">سفارشات شما</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">سفارش شما</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">محصول</th>
                                                        <th class="product-total">جمع کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> هدفون بی سیم بیتس
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">627 هزار تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> دوربین فیلمبرداری جی پی اس دار
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">627 هزار تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> هدفون بی سیم و بلوتوثی بیتس
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">627 هزار تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> گوشی موبایل ایفون مدل ایکس
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">627 هزار تومان</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>جمع کل</th>
                                                        <td>
                                                            <span class="woocommerce-Price-amount amount">963 هزار تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>کل سبد</th>
                                                        <td>
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">963 هزار تومان</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                <!-- /.woocommerce-checkout-review-order-table -->
                                                <div class="woocommerce-checkout-payment" id="payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_bacs">
                                                            <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                            <label for="payment_method_bacs">پرداخت مستقیم بانکی</label>

                                                        </li>
                                                        <li class="wc_payment_method payment_method_cheque">
                                                            <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                            <label for="payment_method_cheque">پرداخت آنلاین </label>

                                                        </li>
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">
                                                            <label for="payment_method_cod">پرداخت نقد هنگام تحویل </label>

                                                        </li>
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                <span><a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">شرایط و ضوابط</a> را مطالعه و قبول دارم</span>
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="1" name="terms-field">
                                                        </p>
                                                        <a href="order-received.html" class="button wc-forward text-center">تأیید سفارش</a>
                                                    </div>
                                                </div>
                                                <!-- /.woocommerce-checkout-payment -->
                                            </div>
                                            <!-- /.order-review-wrapper -->
                                        </div>
                                        <!-- .woocommerce-checkout-review-order -->
                                    </form>
                                    <!-- .woocommerce-checkout -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->

    @include('site.layout.footer')
