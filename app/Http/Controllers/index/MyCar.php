<?php

namespace app\index\controller;
use think\Controller;

class MyCar extends Controller
{
    # 购物车
    public function index()
    {
        return $this->fetch('index');
    }

    # 支付页
    public function pay()
    {
        return $this->fetch('pay');
    }
}