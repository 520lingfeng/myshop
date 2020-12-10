<?php

namespace app\index\controller;
use think\Controller;

class Goods extends Controller
{
    # 商品列表页
    public function goodsList()
    {
        return $this->fetch('goodsList');
    }

    # 商品详情页
    public function goodsDetail()
    {
        return $this->fetch('goodsDetail');
    }
}