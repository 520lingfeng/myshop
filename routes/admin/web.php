<?php

# 默认是不用引入改命名空间的 vscode自身的原因
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'admin'], function(){
    # 后台首页
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/home', 'Admin\IndexController@home');
    # 登录页
    Route::get('/login', 'Admin\UserController@login');
});