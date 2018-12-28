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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'MasterDienTu'], function() {
    Route::get('trang-chu', ['as' => 'page.home', 'uses' => 'webdientucontroller@home']);
    Route::get('shop1', ['as' => 'page.shop1', 'uses' => 'webdientucontroller@shop1']);
    Route::get('shop2', ['as' => 'page.shop2', 'uses' => 'webdientucontroller@shop2']);
    Route::get('shop3', ['as' => 'page.shop3', 'uses' => 'webdientucontroller@shop3']);
    Route::get('shop4', ['as' => 'page.shop4', 'uses' => 'webdientucontroller@shop4']);
    Route::get('shop5', ['as' => 'page.shop5', 'uses' => 'webdientucontroller@shop5']);
    Route::get('shop6', ['as' => 'page.shop6', 'uses' => 'webdientucontroller@shop6']);
    Route::get('shop7', ['as' => 'page.shop7', 'uses' => 'webdientucontroller@shop7']);
    Route::get('shop8', ['as' => 'page.shop8', 'uses' => 'webdientucontroller@shop8']);
    Route::get('shop10', ['as' => 'page.shop10', 'uses' => 'webdientucontroller@shop10']);
    Route::get('shop11', ['as' => 'page.shop11', 'uses' => 'webdientucontroller@shop11']);
    Route::get('test/{id_loai}', ['as' => 'test', 'uses' => 'webdientucontroller@ten']);
    Route::get('cart', ['as' => 'cart', 'uses' => 'webdientucontroller@cart']);
    Route::get('addcart/{id}', ['as' => 'addcart', 'uses' => 'webdientucontroller@addcart']);
    Route::get('deletecart/{id}', ['as' => 'deletecart', 'uses' => 'webdientucontroller@deletecart']);
    Route::post('updatesl/{id}', ['as' => 'updatesl', 'uses' => 'webdientucontroller@updatesl']);
    Route::get('checkout', ['as' => 'page.checkout', 'uses' => 'webdientucontroller@checkout']);
    Route::post('checkout', ['as' => 'page.post_checkout', 'uses' => 'webdientucontroller@post_checkout']);
    Route::get('chi-tiet-san-pham/{id}', ['as' => 'page.san_pham_chi_tiet', 'uses' => 'webdientucontroller@san_pham_chi_tiet']);
    Route::post('mail', ['as' => 'post_email', 'uses' => 'webdientucontroller@post_email']);
});
Route::group(['prefix'=>'Admin'], function() {
    Route::get('admin-home', ['as' => 'admin.adhome', 'uses' => 'admincontroller@adhome']);
    ////////////////////san-pham/////////////////////////////
    Route::get('admin-list-san-pham', ['as' => 'admin.list_san_pham', 'uses' => 'admincontroller@list_san_pham']);
    Route::get('admin-add-san-pham', ['as' => 'admin.add_san_pham', 'uses' => 'admincontroller@add_san_pham']);
    Route::post('admin-add-san-pham', ['as'=>'admin.post_add_san_pham','uses' => 'admincontroller@post_add_san_pham']);
    Route::get('admin-edit-san-pham/{id}',['as'=>'admin.edit_san_pham','uses'=>'admincontroller@edit_san_pham']);
    Route::post('admin-edit-san-pham/{id}',['as'=>'admin.post_edit_san_pham','uses'=>'admincontroller@post_edit_san_pham']);
    /////////////////////danh_muc_san_pham//////////////////////////
    Route::get('admin-list-danh-muc-san-pham', ['as' => 'admin.list_danh_muc_san_pham', 'uses' => 'admincontroller@list_danh_muc_san_pham']);
    Route::get('admin-add-danh-muc-san-pham', ['as' => 'admin.add_danh_muc_san_pham', 'uses' => 'admincontroller@add_danh_muc_san_pham']);
    Route::post('admin-add-danh-muc-san-pham', ['as'=>'admin.post_add_danh_muc_san_pham','uses' => 'admincontroller@post_add_danh_muc_san_pham']);
    Route::get('admin-edit-danh-muc-san-pham/{id}',['as'=>'admin.edit_danh_muc_san_pham','uses'=>'admincontroller@edit_danh_muc_san_pham']);
    Route::post('admin-edit-danh-muc-san-pham/{id}',['as'=>'admin.post_edit_danh_muc_san_pham','uses'=>'admincontroller@post_edit_danh_muc_san_pham']);
    /////////////////////loai_san_pham//////////////////////////
    Route::get('admin-list-loai-san-pham', ['as' => 'admin.list_loai_san_pham', 'uses' => 'admincontroller@list_loai_san_pham']);
    Route::get('admin-add-loai-san-pham', ['as' => 'admin.add_loai_san_pham', 'uses' => 'admincontroller@add_loai_san_pham']);
    Route::post('admin-add-loai-san-pham', ['as'=>'admin.post_add_loai_san_pham','uses' => 'admincontroller@post_add_loai_san_pham']);
    Route::get('admin-edit-loai-san-pham/{id}',['as'=>'admin.edit_loai_san_pham','uses'=>'admincontroller@edit_loai_san_pham']);
    Route::post('admin-edit-loai-san-pham/{id}',['as'=>'admin.post_edit_loai_san_pham','uses'=>'admincontroller@post_edit_loai_san_pham']);
    /////////////////////Hoa-Don/////////////////////////
    Route::get('admin-list-hoa-don', ['as' => 'admin.list_hoa_don', 'uses' => 'admincontroller@list_hoa_don']);
    Route::get('admin-del/{id}', ['as' => 'admin.del_san_pham', 'uses' => 'admincontroller@del_san_pham']);
});
