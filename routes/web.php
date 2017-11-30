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

Auth::routes();

## ADMIN
Route::get('/', function () {
    return redirect(route('login'));
});

## ADMIN
Route::group(['prefix' => '/', 'middleware' => ['auth', 'web']], function () {

    ## HOME
    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

    ## PRODUCTS
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', ['as' => 'productList', 'uses' => 'ProductsController@index']);
        Route::post('add', ['as' => 'addProduct', 'uses' => 'ProductsController@add']);
        Route::put('edit', ['as' => 'editProduct', 'uses' => 'ProductsController@edit']);
        Route::delete('delete/{regId}', ['as' => 'deleteProduct', 'uses' => 'ProductsController@delete']);
    });

    ## SETTINGS
    Route::get('settings', ['as' => 'settings', 'uses' => 'SettingsController@getIndex']);
    Route::put('settings', ['as' => 'settingsPut', 'uses' => 'SettingsController@putUpdate']);

    ## PROFILE
    Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@getIndex']);
    Route::put('profile/edit', ['as' => 'profilePut', 'uses' => 'ProfileController@putUpdate']);

    ## USERS
    Route::get('users', ['as' => 'users', 'uses' => 'UsersController@getIndex']);
    Route::get('users/add', ['as' => 'usersAdd', 'uses' => 'UsersController@getAdd']);
    Route::post('users/add', ['as' => 'usersAdd', 'uses' => 'UsersController@postAdd']);
    Route::get('users/edit/{userId?}', ['as' => 'usersEdit', 'uses' => 'UsersController@getEdit']);
    Route::put('users/edit', ['as' => 'usersEditPut', 'uses' => 'UsersController@putEdit']);
    Route::get('users/permissions/{userId?}', ['as' => 'usersPermissions', 'uses' => 'UsersController@getPermissions']);
    Route::post('users/permissions', ['as' => 'usersPermissionsPost', 'uses' => 'UsersController@postPermissions']);
    Route::delete('users/delete', ['as' => 'usersDelete', 'uses' => 'UsersController@delete']);

    ## LOGOUT
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    ##CATEGORY
    Route::get('select-category/{modalTitle?}/{modalName?}/{modalDatabaseTable?}', ['as' => 'selectCategory', 'uses' => 'CategoryModalController@getIndex']);
    Route::post('select-category/add', ['as' => 'selectCategoryAdd', 'uses' => 'CategoryModalController@postAdd']);
    Route::put('select-category/edit', ['as' => 'selectCategoryEdit', 'uses' => 'CategoryModalController@putEdit']);
    Route::delete('select-category/delete', ['as' => 'selectCategoryDelete', 'uses' => 'CategoryModalController@delete']);
    Route::post('select-category/refresh', ['as' => 'selectCategoryRefresh', 'uses' => 'CategoryModalController@postRefresh']);
});