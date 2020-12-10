<?php

namespace App\HTTP\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    # 后台首页
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('admin.home');
    }
}
