<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPost;
use Illuminate\Support\Facades\DB;
use Exception;

class UserController extends Controller
{
    /**
     * 登录页
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * 注册页
     */
    public function register()
    {
        // try{
        //     //执行原生语句，如果展示数据库列表，则成功
        //     return DB::select('show databases');
        //  }catch(Exception $e){
        //     return '数据库链接错误<br/>'.'错误原因：<br/>'.$e->getMessage();
        //  }
        return view('admin.register');
    }

    /**
     * 处理注册页
     */
    public function registerMsg(RegisterPost $registerPost)
    {
        dump(1);
    }
}
