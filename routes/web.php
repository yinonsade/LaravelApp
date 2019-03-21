<?php

#Cms
Route::middleware(['cmsguard'])->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
        Route::get('orders', 'CmsController@orders');
    });
});

#shop
Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('order', 'ShopController@order');
    Route::get('remove-item', 'ShopController@removeItem');
    Route::get('update-cart', 'ShopController@updatecart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('checkout', 'ShopController@checkout');
    Route::get('all-products', 'ShopController@allProducts');
    Route::get('payment', 'ShopController@payment');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@item');

});

#user
Route::prefix('user')->group(function () {
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
    Route::get('profile', 'UserController@getProfile');
    Route::post('profile', 'UserController@postProfile');
    Route::get('logout', 'UserController@logout');

});

#Pages
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('home', 'PagesController@home');
Route::get('/', 'PagesController@welcome');
Route::get('terms', 'PagesController@terms');
Route::get('{url}', 'PagesController@content');

#email