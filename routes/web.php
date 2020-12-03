<?php

//  前台模块路由
//  首页
Route::get('/','Home\IndexController@index');
//  文章详情
Route::get('/content{id}','Home\ArticleController@content')->where('id','\d+');
//  添加评论
Route::post('/comment','Home\ArticleController@addComment')->middleware('verify_login');

Route::get('/about','Home\IndexController@aboutMe');





//  登录模块路由
Route::group([
    'prefix' => '/admin',
],function () {

//  登录页
    Route::get('/login','Admin\LoginController@login');
// 处理登录
    Route::post('/login','Admin\LoginController@addLogin');
//  注册
    Route::get('/rel','Admin\LoginController@rel');
//  处理注册
    Route::post('/rel','Admin\LoginController@torel');
//  忘记密码
    Route::get('/res','Admin\LoginController@res');
    Route::post('/res','Admin\LoginController@dores');
//  退出登录
    Route::get('/login-out','Admin\LoginController@loginOut');
});


//  后台模块路由
Route::group([
    'prefix' => '/admin',
    'middleware' => ['verify_login'],
],function (){

//  后台首页
    Route::get('/user','Admin\IndexController@show');
//  通过注册
    Route::get('/add-user{id}','Admin\IndexController@addUser')->where('id','\d+');
//  删除管理员
    Route::get('/del-user{id}','Admin\IndexController@delUser')->where('id','\d+');
//  添加分类
    Route::get('/add-item','Admin\ItemController@addItems');
//  添加分类处理
    Route::post('/add-item','Admin\ItemController@doAddItems');
//  添加文章
    Route::get('/add-article','Admin\ArticleController@addArticle');
//  处理添加文章数据
    Route::post('/add-article','Admin\ArticleController@doAddArticle');
//  删除文章
    Route::get('/del-article','Admin\ArticleController@delArticle');
//  处理删除文章
    Route::get('/del-article{id}','Admin\ArticleController@doDelArticle')->where('id','\d+');
});


