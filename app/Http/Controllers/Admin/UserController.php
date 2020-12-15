<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPost;
use Illuminate\Http\Request;

// use Exception;

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
    public function register(Request $request)
    {
        // try{
        //     //执行原生语句，如果展示数据库列表，则成功
        //     return DB::select('show databases');
        //  }catch(Exception $e){
        //     return '数据库链接错误<br/>'.'错误原因：<br/>'.$e->getMessage();
        //  }
        // if ($request->isMethod('POST')) {
        //     $this->validate($request, [
        //         'usercode' => 'bail|required|alpha_dash|unique:user|min:4|max:15',
        //         'password' => 'bail|required|alpha_dash|min:6|max:16'
        //     ]);
        // }
        return view('admin.register');
    }

    public function registerMsg(RegisterPost $registerPost) {
        
    }
}
