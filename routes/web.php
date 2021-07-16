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
require __DIR__.'/auth.php';

// Atom/ RSS Feed Routes
Route::feeds();

// Language Switch
Route::get('language/{language}', 'LanguageController@switch')->name('language.switch');

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('listing', 'FrontendController@listing')->name('listing');
    Route::get('detail', 'FrontendController@detail')->name('detail');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
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
* --------------------------------------------------------------------
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
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("settings", "SettingController@index")->name("settings");
        Route::post("settings", "SettingController@store")->name("settings.store");
    });



    $module_name = 'services';
    $controller_name = 'ServiceController';
    Route::get("services", ['as' => "services.index", 'uses' => "ServiceController@index"]);
    Route::get("services/index_list", ['as' => "services.index_list", 'uses' => "ServiceController@index_list"]);
    Route::get("services/index_data", ['as' => "services.index_data", 'uses' => "ServiceController@index_data"]);
    Route::get("services/trashed", ['as' => "services.trashed", 'uses' => "ServiceController@trashed"]);
    Route::patch("services/trashed/{id}", ['as' => "services.restore", 'uses' => "ServiceController@restore"]);
    Route::resource("services", "ServiceController");



    $module_name = 'category';
    $controller_name = 'category';
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
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("notifications", ['as' => "notifications.index", 'uses' => "NotificationsController@index"]);
    Route::get("notifications/markAllAsRead", ['as' => "notifications.markAllAsRead", 'uses' => "NotificationsController@markAllAsRead"]);
    Route::delete("notifications/deleteAll", ['as' => "notifications.deleteAll", 'uses' => "NotificationsController@deleteAll"]);
    Route::get("notifications/{id}", ['as' => "notifications.show", 'uses' => "NotificationsController@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("backups", ['as' => "backups.index", 'uses' => "BackupController@index"]);
    Route::get("backups/create", ['as' => "backups.create", 'uses' => "BackupController@create"]);
    Route::get("backups/download/{file_name}", ['as' => "backups.download", 'uses' => "BackupController@download"]);
    Route::get("backups/delete/{file_name}", ['as' => "backups.delete", 'uses' => "BackupController@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("roles", "RolesController");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
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
});

/*
*
* Backend vendor Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
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
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("settings", "SettingController@index")->name("settings");
        Route::post("settings", "SettingController@store")->name("settings.store");
    });



//    $module_name = 'services';
//    $controller_name = 'ServiceController';
//    Route::get("services", ['as' => "services.index", 'uses' => "ServiceController@index"]);
//    Route::get("services/index_list", ['as' => "services.index_list", 'uses' => "ServiceController@index_list"]);
//    Route::get("services/index_data", ['as' => "services.index_data", 'uses' => "ServiceController@index_data"]);
//    Route::get("services/trashed", ['as' => "services.trashed", 'uses' => "ServiceController@trashed"]);
//    Route::patch("services/trashed/{id}", ['as' => "services.restore", 'uses' => "ServiceController@restore"]);
//    Route::resource("services", "ServiceController");

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
//    $module_name = 'notifications';
//    $controller_name = 'NotificationsController';
//    Route::get("notifications", ['as' => "notifications.index", 'uses' => "NotificationsController@index"]);
//    Route::get("notifications/markAllAsRead", ['as' => "notifications.markAllAsRead", 'uses' => "NotificationsController@markAllAsRead"]);
//    Route::delete("notifications/deleteAll", ['as' => "notifications.deleteAll", 'uses' => "NotificationsController@deleteAll"]);
//    Route::get("notifications/{id}", ['as' => "notifications.show", 'uses' => "NotificationsController@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
//    $module_name = 'backups';
//    $controller_name = 'BackupController';
//    Route::get("backups", ['as' => "backups.index", 'uses' => "BackupController@index"]);
//    Route::get("backups/create", ['as' => "backups.create", 'uses' => "BackupController@create"]);
//    Route::get("backups/download/{file_name}", ['as' => "backups.download", 'uses' => "BackupController@download"]);
//    Route::get("backups/delete/{file_name}", ['as' => "backups.delete", 'uses' => "BackupController@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("roles", "RolesController");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
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
});
