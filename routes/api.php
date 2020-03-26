<?php

use Illuminate\Http\Request;
//use Illuminate\Routing\Router;
    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 *
 *
 * 开始了开始了，万恶的工程化
 * 项目：某不知名的全栈商城，希望不是我一个人写到底吧
 * 我尽可能的考虑的完善点，尽量不在修改原数据库
 * 加油！
 */
Route::namespace('Api')->group(function(){
    # 管理员
    Route::get('/admin', 'AdminController@index');# 查询全部数据
    Route::get('/admin/{id}', 'AdminController@show');# 查询某一个数据
    Route::post('/admin/add', 'AdminController@add');# 添加数据
    Route::put('/admin/update/{id}', 'AdminController@update');# 编辑数据
    Route::delete('/admin/delete/{id}', 'AdminController@delete');# 删除数据
    # 菜单管理
    Route::get('/menus', 'MenusController@index');
    Route::get('/menus/{id}', 'MenusController@show');
    Route::post('/menus/add', 'MenusController@add');
    Route::put('/menus/update/{id}', 'MenusController@update');
    Route::delete('/menus/delete/{id}', 'MenusController@delete');
});
