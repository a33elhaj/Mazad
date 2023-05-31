<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

//Mazad Routes

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::resource("/product", ProductController::class);
    Route::resource("/customer", CustomerController::class);
    Route::resource("/supplier", SupplierController::class);
    Route::resource("/cinvoice", CInvoiceController::class);
    Route::resource("/sinvoice", SInvoiceController::class);
});


