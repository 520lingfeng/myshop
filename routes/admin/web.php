<?php

Route::group(['prefix' => 'admin'], function(){
    # 后台首页
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/home', 'Admin\IndexController@home');
    # 登录页
    Route::get('/login', 'Admin\UserController@login');
});