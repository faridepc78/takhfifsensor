@section('site_title')
    <title>تخفیف سنسور | تماس با ما</title>
@endsection

@section('site_body')
    <body class="page home page-template-default">
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
                    تماس با ما
                </nav>

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <header class="entry-header">
                                <div class="page-header-caption">
                                    <h1 class="entry-title">تماس با ما</h1>
                                </div>
                            </header>

                            <div class="entry-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-block">
                                            <h2 class="contact-page-title">نوشتن یک پیام</h2>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که لازم است</p>
                                        </div>

                                        <div class="contact-form">
                                            <div role="form" class="wpcf7" id="wpcf7-f425-o1" lang="en-US" dir="ltr">

                                                <form id="contact_us_form" class="wpcf7-form" method="post"
                                                      action="{{route('contact-us')}}">

                                                    @csrf

                                                    @guest()

                                                        <div class="form-group row">

                                                            <div class="col-xs-12 col-md-4">
                                                                <label for="mobile">تلفن همراه
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap first-name">
																	<input onkeyup="this.value=removeSpaces(this.value)"
                                                                           type="text"
                                                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text @error('mobile') is-invalid @enderror"
                                                                           value="{{old('mobile')}}" name="mobile"
                                                                           autocomplete="mobile" autofocus
                                                                           id="mobile">

                                                                @error('mobile')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </span>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">
                                                                <label for="l_name">نام خانوادگی
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap first-name">
																	<input onkeyup="this.value=removeSpaces(this.value)"
                                                                           type="text"
                                                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text @error('l_name') is-invalid @enderror"
                                                                           value="{{old('l_name')}}" name="l_name"
                                                                           autocomplete="l_name" autofocus
                                                                           id="l_name">

                                                                @error('l_name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </span>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">
                                                                <label for="f_name">نام
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap first-name">
																	<input onkeyup="this.value=removeSpaces(this.value)"
                                                                           type="text"
                                                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text @error('f_name') is-invalid @enderror"
                                                                           value="{{old('f_name')}}" name="f_name"
                                                                           autocomplete="f_name" autofocus
                                                                           id="f_name">

                                                                @error('f_name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </span>
                                                            </div>

                                                        </div>

                                                    @endguest

                                                    <div class="form-group">
                                                        <label for="subject">
                                                            موضوع
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap subject">
																<input onkeyup="this.value=removeSpaces(this.value)" type="text"
                                                                       class="wpcf7-form-control wpcf7-text input-text @error('subject') is-invalid @enderror"
                                                                       value="{{old('subject')}}" name="subject" id="subject" autocomplete="subject" autofocus>

                                                                @error('subject')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
															</span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="text">
                                                            پیام
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-message">
																<textarea onkeyup="this.value=removeSpaces(this.value)" style="resize: vertical"
                                                                          class="wpcf7-form-control wpcf7-textarea @error('subject') is-invalid @enderror"
                                                                          rows="10" cols="40"
                                                                          name="text" id="text" autocomplete="text" autofocus>{{old('text')}}</textarea>

                                                            @error('text')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </span>
                                                    </div>

                                                    <div class="form-group mr-2 mt-4">
                                                        {!! app('captcha')->display(); !!}
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <span class="help-block" role="alert">
                                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <p>
                                                            <input type="submit" value="ارسال پیام"
                                                                   class="wpcf7-form-control wpcf7-submit"/>
                                                        </p>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 store-info store-info-v2">
                                        <div class="google-map">
                                            <iframe height="288" allowfullscreen="" style="border:0"
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.593303940039!2d-0.15470444843858283!3d51.53901886611164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ae62edd5771%3A0x27f2d823e2be0249!2sPrincess+Rd%2C+London+NW1+8JR%2C+UK!5e0!3m2!1sen!2s!4v1458827996435"></iframe>
                                        </div>
                                        <div class="kc-elm kc-css-773435 kc_text_block">
                                            <h2 class="contact-page-title">آدرس فروشگاه محلی ما</h2>
                                            <p>ایران، تهران، جاده ابریشم، خیابان فلانی نسب، کوچه فلانی
                                                <br> تلفن تماس (+800)856 800 604
                                                <br> ایمیل: <a href="mailto:contact@yourstore.com">info@electro.com</a>
                                            </p>
                                            <h3>ساعات کاری</h3>
                                            <p class="operation-hours">دوشنبه تا جمعه: 9 صبح تا 9 شب
                                                <br> شنبه تا یکشنبه: 9 صبح تا 11 ظهر</p>
                                            <h3>فرصت های شغلی</h3>
                                            <p>اگر تخصص شما شامل فرصت های شغلی ما نیز هست تماس بگیرید: <a
                                                    href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    @include('site.layout.footer')

    <script type="text/javascript">

        $(document).ready(function () {

            $('#contact_us_form').validate({

                rules: {
                    f_name: {
                        required: true
                    },

                    l_name: {
                        required: true
                    },

                    mobile: {
                        required: true,
                        checkMobile: true
                    },

                    subject: {
                        required: true
                    },

                    text: {
                        required: true
                    }
                },

                messages: {
                    f_name: {
                        required: "لطفا نام را وارد کنید"
                    },

                    l_name: {
                        required: "لطفا نام خانوادگی را وارد کنید"
                    },

                    mobile: {
                        required: "لطفا تلفن همراه را وارد کنید",
                        checkMobile: "لطفا تلفن همراه را صحیح وارد کنید"
                    },

                    subject: {
                        required: "لطفا موضوع را وارد کنید"
                    },

                    text: {
                        required: "لطفا پیام را وارد کنید"
                    }
                },
                submitHandler: function (form) {
                    if (grecaptcha.getResponse()) {
                        form.submit();
                    } else {
                        toastr['info']('لطفا ریکپچا را کامل کنید', 'پیام');
                    }
                }

            });

        });

    </script>
