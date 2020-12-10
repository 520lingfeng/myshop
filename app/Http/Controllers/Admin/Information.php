<?php

namespace app\admin\controller;
use think\Controller;

class Information extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
}