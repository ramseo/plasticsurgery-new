<?php
// code
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\Modules\Article\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

    Route::get('importExportView', 'ExcelController@importExportView')->name('importExportView');
    Route::post('export', 'ExcelController@export')->name('export');
    Route::post('import', 'ExcelController@import')->name('import');
});
// code 

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Article\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Posts Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'blog';
    $controller_name = 'PostsController';
    Route::get("blog", ['as' => "posts.index", 'uses' => "PostsController@index"]);
    Route::get("blog/{slug?}", ['as' => "posts.show", 'uses' => "PostsController@show"]);

    /*
     *
     *  Categories Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'categories';
    $controller_name = 'CategoriesController';
    Route::get("blog-c", ['as' => "categories.index", 'uses' => "CategoriesController@index"]);
    Route::get("blog/c/{slug?}", ['as' => "categories.show", 'uses' => "CategoriesController@show"]);

    $module_name = 'tags';
    $controller_name = 'TagsController'; 
    Route::get("tags", ['as' => "tags.index", 'uses' => "TagsController@index"]);
    Route::get("tags/{slug?}", ['as' => "tags.show", 'uses' => "TagsController@show"]);
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Article\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Posts Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'posts';
    $controller_name = 'PostsController';
    Route::get("posts/index_list", ['as' => "posts.index_list", 'uses' => "PostsController@index_list"]);
    Route::get("posts/index_data", ['as' => "posts.index_data", 'uses' => "PostsController@index_data"]);
    Route::get("posts/trashed", ['as' => "posts.trashed", 'uses' => "PostsController@trashed"]);
    Route::patch("posts/trashed/{id}", ['as' => "posts.restore", 'uses' => "PostsController@restore"]);
    Route::resource("posts", "PostsController");

    /*
     *
     *  Categories Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'categories';
    $controller_name = 'CategoriesController';
    Route::get("categories/index_list", ['as' => "categories.index_list", 'uses' => "CategoriesController@index_list"]);
    Route::get("categories/index_data", ['as' => "categories.index_data", 'uses' => "CategoriesController@index_data"]);
    Route::get("categories/trashed", ['as' => "categories.trashed", 'uses' => "CategoriesController@trashed"]);
    Route::patch("categories/trashed/{id}", ['as' => "categories.restore", 'uses' => "CategoriesController@restore"]);
    Route::resource("categories", "CategoriesController");
});
