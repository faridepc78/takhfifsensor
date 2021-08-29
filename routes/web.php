<?php


/*START ADMIN*/

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth', 'check_admin', 'throttle:50,1'],
    'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::patch('profile', 'ProfileController@update')->name('update_profile');

    Route::resource('categories', 'CategoryController');

    Route::resource('sliders', 'SliderController')->except('show');

    Route::resource('banners', 'BannerController')->except('show');

    Route::resource('brands', 'BrandController')->except('show');

    Route::resource('users', 'UserController')->except('show');

    Route::resource('blacklists', 'BlacklistController')->except('show');

    Route::resource('postsCategories', 'PostCategoryController')->except('show');

    Route::resource('posts', 'PostController')->except('show');

    Route::get('post/media/{id}', 'PostController@media_index')->name('post_media_index');
    Route::post('post/media/{id}', 'PostController@media_store')->name('post_media_store');
    Route::delete('post/media/{id}/{media_id}/destroy', 'PostController@media_destroy')->name('post_media_destroy');

    Route::resource('products', 'ProductController')->except('show');

    Route::get('product/media/{id}', 'ProductController@media_index')->name('product_media_index');
    Route::post('product/media/{id}', 'ProductController@media_store')->name('product_media_store');
    Route::delete('product/media/{id}/{media_id}/destroy', 'ProductController@media_destroy')->name('product_media_destroy');

    Route::get('product/gallery/{id}', 'ProductController@gallery_index')->name('product_gallery_index');
    Route::post('product/gallery/{id}', 'ProductController@gallery_store')->name('product_gallery_store');
    Route::delete('product/media/{id}/{gallery_id}/destroy', 'ProductController@gallery_destroy')->name('product_gallery_destroy');

});

/*END ADMIN*/

/*START AUTH*/

Route::group(['prefix' => '/', 'middleware' => ['web', 'throttle:50,1'],
    'namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('register', 'RegisterController@showRegistrationForm')
        ->name('register')->middleware('check_verify');
    Route::post('register', 'RegisterController@register')
        ->name('register')->middleware('check_verify');

    Route::get('verify', 'VerificationController@show')
        ->name('verify')->middleware(['auth', 'check_verify']);
    Route::post('verify', 'VerificationController@verify')
        ->name('verify')->middleware(['auth']);
    Route::post('verify/resend', 'VerificationController@resend')
        ->name('resend')->middleware(['auth']);

    Route::get('forgot', 'ForgotPasswordController@show')
        ->name('forgot')->middleware('guest');
    Route::post('forgot', 'ForgotPasswordController@send')
        ->name('forgot')->middleware('guest');

    Route::get('login', 'LoginController@showLoginForm')
        ->name('login')->middleware('check_verify');
    Route::post('login', 'LoginController@login')
        ->name('login')->middleware(['check_verify']);

    Route::any('logout', 'LoginController@logout')
        ->name('logout')->middleware('auth');
});

/*END AUTH*/


/*START SITE*/

Route::group(['prefix' => '/', 'middleware' => ['web', 'throttle:50,1', 'block_user'],
    'namespace' => 'App\Http\Controllers\Site'], function () {

    Route::get('/', 'MainController@home')->name('home');

    Route::get('about-us', 'MainController@about_us')->name('about-us');

    Route::get('contact-us', 'MainController@contact_us')->name('contact-us');
    Route::post('contact-us', 'MainController@contact_us_post')->name('contact-us');

    Route::get('faq', 'MainController@faq')->name('faq');

    Route::get('terms-and-conditions', 'MainController@terms_and_conditions')->name('terms-and-conditions');

    Route::get('products/category/{slug}', 'ProductController@category')->name('products.category');

    Route::get('products/brand/{slug}', 'ProductController@brand')->name('products.brand');

    Route::get('products/search', 'ProductController@search')->name('products.search');

    Route::get('product/{slug}', 'ProductController@index')->name('products.single');

    Route::get('blog', 'BlogController@index')->name('blog');
    Route::get('blog/category/{slug}', 'BlogController@category')->name('blog.category');
    Route::get('blog/post/{slug}', 'BlogController@post')->name('blog.post');
    Route::get('blog/search', 'BlogController@search')->name('blog.search');

});

/*END SITE*/
