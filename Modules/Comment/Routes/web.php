<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Comment\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Comments Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'comments';
    $controller_name = 'CommentsController';
    Route::get("comments", ['as' => "comments.index", 'uses' => "CommentsController@index"]);
    Route::get("comments/{id}/{slug?}", ['as' => "comments.show", 'uses' => "CommentsController@show"]);
    Route::post("comments", ['as' => "comments.store", 'uses' => "CommentsController@store"]);
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Comment\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'comments'; 
    $controller_name = 'CommentsController';
    Route::get("comments/index_list", ['as' => "comments.index_list", 'uses' => "CommentsController@index_list"]);
    Route::get("comments/index_data", ['as' => "comments.index_data", 'uses' => "CommentsController@index_data"]);
    Route::get("comments/trashed", ['as' => "comments.trashed", 'uses' => "CommentsController@trashed"]);
    Route::patch("comments/trashed/{id}", ['as' => "comments.restore", 'uses' => "CommentsController@restore"]);
    Route::get("comments/destroy/{id}", ['as' => "comments.destroy", 'uses' => "CommentsController@destroy"]);
    Route::resource("comments", "CommentsController");
});
