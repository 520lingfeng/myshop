<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 登录页
     */
    public function login()
    {
        return view('admin.login');
    }
}
