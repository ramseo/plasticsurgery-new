<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Autho Routes
require __DIR__ . '/auth.php';

// Atom/ RSS Feed Routes
Route::feeds();

// Language Switch
Route::get('language/{language}', 'LanguageController@switch')->name('language.switch');

/*
*
* Frontend Routes
*
*/
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('listing', 'FrontendController@listing')->name('listing');
    Route::get('detail', 'FrontendController@detail')->name('detail');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');
    Route::post('newsletter', 'NewsletterController@store')->name('newsletter');
    Route::post('post-review', 'VendorController@postReview')->name('post-review');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        */
        Route::get('profile/{id}', ['as' => "users.profile", 'uses' => "UserController@profile"]);
        Route::get('profile/{id}/edit', ['as' => "users.profileEdit", 'uses' => "UserController@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "users.profileUpdate", 'uses' => "UserController@profileUpdate"]);
        Route::get("users/emailConfirmationResend/{id}", ['as' => "users.emailConfirmationResend", 'uses' => "UserController@emailConfirmationResend"]);
        Route::get('profile/changePassword/{username}', ['as' => "users.changePassword", 'uses' => "UserController@changePassword"]);
        Route::patch('profile/changePassword/{username}', ['as' => "users.changePasswordUpdate", 'uses' => "UserController@changePasswordUpdate"]);
        Route::delete('users/userProviderDestroy', ['as' => 'users.userProviderDestroy', 'uses' => 'UserController@userProviderDestroy']);
    });
});

/*
*
* Backend admin Routes
* These routes need view-backend permission
*/
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {

    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        Route::get("settings", "SettingController@index")->name("settings");
        Route::post("settings", "SettingController@store")->name("settings.store");
    });

    Route::get("city", ['as' => "city.index", 'uses' => "CityController@index"]);
    Route::get("city/index_list", ['as' => "city.index_list", 'uses' => "CityController@index_list"]);
    Route::get("city/index_data", ['as' => "city.index_data", 'uses' => "CityController@index_data"]);
    Route::get("city/trashed", ['as' => "city.trashed", 'uses' => "CityController@trashed"]);
    Route::patch("city/trashed/{id}", ['as' => "city.restore", 'uses' => "CityController@restore"]);
    Route::resource("city", "CityController");

    Route::get("type", ['as' => "type.index", 'uses' => "TypeController@index"]);
    Route::get("type/index_list", ['as' => "type.index_list", 'uses' => "TypeController@index_list"]);
    Route::get("type/index_data", ['as' => "type.index_data", 'uses' => "TypeController@index_data"]);
    Route::get("type/trashed", ['as' => "type.trashed", 'uses' => "TypeController@trashed"]);
    Route::patch("type/trashed/{id}", ['as' => "type.restore", 'uses' => "TypeController@restore"]);
    Route::resource("type", "TypeController");

    Route::get('service/{type}', 'ServiceController@index')->name('service.index');
    Route::get('service/create/{type}', 'ServiceController@create')->name('service.create');
    Route::post('service/store/{type}', 'ServiceController@store')->name('service.store');
    Route::get('service/edit/{id}', 'ServiceController@edit')->name('service.edit');
    Route::post('service/update/{id}', 'ServiceController@update')->name('service.update');
    Route::resource("service", "ServiceController");

    Route::get('budget/{type}', 'BudgetController@index')->name('budget.index');
    Route::get('budget/create/{type}', 'BudgetController@create')->name('budget.create');
    Route::post('budget/store/{type}', 'BudgetController@store')->name('budget.store');
    Route::get('budget/edit/{id}', 'BudgetController@edit')->name('budget.edit');
    Route::post('budget/update/{id}', 'BudgetController@update')->name('budget.update');
    Route::resource("budget", "BudgetController");


    Route::get("category", ['as' => "category.index", 'uses' => "CategoryController@index"]);
    Route::get("category/index_list", ['as' => "category.index_list", 'uses' => "CategoryController@index_list"]);
    Route::get("category/index_data", ['as' => "category.index_data", 'uses' => "CategoryController@index_data"]);
    Route::get("category/trashed", ['as' => "category.trashed", 'uses' => "CategoryController@trashed"]);
    Route::patch("category/trashed/{id}", ['as' => "category.restore", 'uses' => "CategoryController@restore"]);
    Route::resource("category", "CategoryController");

    /*
    *
    *  Notification Routes
    *
    */
    Route::get("notifications", ['as' => "notifications.index", 'uses' => "NotificationsController@index"]);
    Route::get("notifications/markAllAsRead", ['as' => "notifications.markAllAsRead", 'uses' => "NotificationsController@markAllAsRead"]);
    Route::delete("notifications/deleteAll", ['as' => "notifications.deleteAll", 'uses' => "NotificationsController@deleteAll"]);
    Route::get("notifications/{id}", ['as' => "notifications.show", 'uses' => "NotificationsController@show"]);

    /*
    *
    *  Backup Routes
    *
    */
    Route::get("backups", ['as' => "backups.index", 'uses' => "BackupController@index"]);
    Route::get("backups/create", ['as' => "backups.create", 'uses' => "BackupController@create"]);
    Route::get("backups/download/{file_name}", ['as' => "backups.download", 'uses' => "BackupController@download"]);
    Route::get("backups/delete/{file_name}", ['as' => "backups.delete", 'uses' => "BackupController@delete"]);

    /*
    *
    *  Roles Routes
    *
    */
    Route::resource("roles", "RolesController");

    /*
    *
    *  Users Routes
    *
    */
    Route::get("users/profile/{id}", ['as' => "users.profile", 'uses' => "UserController@profile"]);
    Route::get("users/profile/{id}/edit", ['as' => "users.profileEdit", 'uses' => "UserController@profileEdit"]);
    Route::patch("users/profile/{id}/edit", ['as' => "users.profileUpdate", 'uses' => "UserController@profileUpdate"]);
    Route::get("users/emailConfirmationResend/{id}", ['as' => "users.emailConfirmationResend", 'uses' => "UserController@emailConfirmationResend"]);
    Route::delete("users/userProviderDestroy", ['as' => "users.userProviderDestroy", 'uses' => "UserController@userProviderDestroy"]);
    Route::get("users/profile/changeProfilePassword/{id}", ['as' => "users.changeProfilePassword", 'uses' => "UserController@changeProfilePassword"]);
    Route::patch("users/profile/changeProfilePassword/{id}", ['as' => "users.changeProfilePasswordUpdate", 'uses' => "UserController@changeProfilePasswordUpdate"]);
    Route::get("users/changePassword/{id}", ['as' => "users.changePassword", 'uses' => "UserController@changePassword"]);
    Route::patch("users/changePassword/{id}", ['as' => "users.changePasswordUpdate", 'uses' => "UserController@changePasswordUpdate"]);
    Route::get("users/trashed", ['as' => "users.trashed", 'uses' => "UserController@trashed"]);
    Route::patch("users/trashed/{id}", ['as' => "users.restore", 'uses' => "UserController@restore"]);
    Route::get("users/index_data", ['as' => "users.index_data", 'uses' => "UserController@index_data"]);
    Route::get("users/index_list", ['as' => "users.index_list", 'uses' => "UserController@index_list"]);
    Route::resource("users", "users");
    Route::patch("users/{id}/block", ['as' => "users.block", 'uses' => "UserController@block", 'middleware' => ['permission:block_users']]);
    Route::patch("users/{id}/unblock", ['as' => "users.unblock", 'uses' => "UserController@unblock", 'middleware' => ['permission:block_users']]);

    /*
     *
     *  Newsletter Routes
     *
     */
    Route::get("newsletter", ['as' => "newsletter.index", 'uses' => "NewsletterController@index"]);

    /*
     *
     *  Menu Routes
     *
     */
    Route::get("menus", ['as' => "menu.index", 'uses' => "MenuController@index"]);
    Route::get("menus-create", ['as' => "menu.create", 'uses' => "MenuController@create"]);
    Route::post("menus-store", ['as' => "menu.store", 'uses' => "MenuController@store"]);
    Route::get("menus-edit/{id}", ['as' => "menu.edit", 'uses' => "MenuController@edit"]);
    Route::patch("menus-update/{id}", ['as' => "menu.update", 'uses' => "MenuController@update"]);
    Route::delete("menus-destroy/{id}", ['as' => "menu.destroy", 'uses' => "MenuController@destroy"]);

});

/*
*
* Backend vendor Routes
* These routes need view-backend permission
*/
Route::group(['namespace' => 'Backend', 'prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['auth', 'can:view_backend']], function () {

    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        Route::get("settings", "SettingController@index")->name("settings");
        Route::post("settings", "SettingController@store")->name("settings.store");
    });

    Route::get('album/', 'AlbumController@index')->name('album.index');
    Route::get('album/create/', 'AlbumController@create')->name('album.create');
    Route::post('album/store/', 'AlbumController@store')->name('album.store');
    Route::get('album/edit/{id}', 'AlbumController@edit')->name('album.edit');
    Route::PATCH('album/update/{id}', 'AlbumController@update')->name('album.update');
    Route::resource("album", "AlbumController");

    Route::get('video/', 'VideoController@index')->name('video.index');
    Route::get('video/create/', 'VideoController@create')->name('video.create');
    Route::post('video/store/', 'VideoController@store')->name('video.store');
    Route::get('video/edit/{id}', 'VideoController@edit')->name('video.edit');
    Route::PATCH('video/update/{id}', 'VideoController@update')->name('video.update');
    Route::resource("video", "VideoController");


    Route::get('image/{album}', 'ImageController@index')->name('image.index');
    Route::post('image/store', 'ImageController@store')->name('image.store');

    Route::get('price', 'PriceController@index')->name('price.index');
    Route::post('price/store', 'PriceController@store')->name('price.store');

    //    Route::resource("image", "ImageController");
    //    Route::get("profile", ['as' => "vendor.profile", 'uses' => "VendorController@profile"]);
    //    Route::post("update", ['as' => "vendor.update", 'uses' => "VendorController@update"]);

    Route::get('profile', 'VendorController@profile')->name('profile');
    Route::post('profile/update', 'VendorController@update')->name('profile.update');
    Route::resource("vendor", "VendorController");
    //    Route::get('service/edit/{id}', 'ServiceController@edit')->name('service.edit');
    //    Route::post('service/update/{id}', 'ServiceController@update')->name('service.update');

});

//Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
//    Route::get('{type}/', 'VendorController@cities')->name('vendor-city-listing');
//    Route::get('{type}/{city}', 'VendorController@index')->name('vendor-listing');
//    Route::get('{type}/{city}/{vendor}', 'VendorController@details')->name('vendor-details');
//});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    $paths = getDataArray('types');
    if ($paths) :
        foreach ($paths as $path) {
            Route::get($path->slug . '/', 'VendorController@cities')->name('vendor-city-listing');
            Route::get($path->slug . '/{city}', 'VendorController@index')->name('vendor-listing');
            Route::get($path->slug . '/{city}/{vendor}', 'VendorController@details')->name('vendor-details');
        }
    endif;
});
