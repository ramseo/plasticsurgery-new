<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Tag\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Tags Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'tags';
    $controller_name = 'TagsController';
    Route::get("tags", ['as' => "tags.index", 'uses' => "TagsController@index"]);
    Route::get("tags/{id}/{slug?}", ['as' => "tags.show", 'uses' => "TagsController@show"]);
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Tag\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Tags Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'tags';
    $controller_name = 'TagsController';
    Route::get("tags/index_list", ['as' => "tags.index_list", 'uses' => "TagsController@index_list"]);
    Route::get("tags/index_data", ['as' => "tags.index_data", 'uses' => "TagsController@index_data"]);
    Route::get("tags/trashed", ['as' => "tags.trashed", 'uses' => "TagsController@trashed"]);
    Route::get("tags/destroy/{id}", ['as' => "tags.destroy", 'uses' => "TagsController@destroy"]);
    Route::patch("tags/trashed/{id}", ['as' => "tags.restore", 'uses' => "TagsController@restore"]);
    Route::resource("tags", "TagsController");
});
