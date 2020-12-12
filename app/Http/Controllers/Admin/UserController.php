<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.register');
    }

    /**
     * 处理注册页
     */
    public function registerMsg(Request $request)
    {
        $this->validate($request, [
            'usercode' => 'required|unique:user|max:255',
            'password' => 'required|min:6',
        ]);
        dump(1);
    }
}