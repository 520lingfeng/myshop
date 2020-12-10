<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use Illuminate\Support\Facades\Route;
# 登录页
// Route::get('login', 'Login/login');
Route::get('admin/login', 'Admin\LoginController@login');
// # 注册页
// Route::get('register', 'Login/register');
// # 获取验证码
// Route::post('mobileYzm', 'Login/getMobileYzm');
// # 验证验证码
// Route::post('code', 'Login/volificationCode');
// # 购物车
// Route::get('mycar', 'MyCar/index');
// # 支付页
// Route::get('pay', 'MyCar/pay');
// # 商品列表页
// Route::get('goodsList', 'Goods/goodsList');
// # 商品详情页
// Route::get('goodsDetail', 'Goods/goodsDetail');

# 后台
Route::get('/admin', 'Admin\IndexController@index');
Route::get('/home', 'Admin\IndexController@home');

// # 管理员管理 - 个人信息
// Route::get('adminInformation', 'admin/Information/index');

// return [
//     # 定义资源路由
//     '__rest__' => [
//         # 产品管理 - 产品类表
//         'adminGoodsList' => 'admin/GoodsList',
//         # 产品管理 - 品牌管理
//         'adminGoodsBrand' => 'admin/GoodsBrand',
//         # 产品管理 - 分类管理
//         'adminGoodsCategory' => 'admin/GoodsCategory',
//         # 图片管理 - 广告管理
//         'adminAdvertisement' => 'admin/Advertisement',
//         # 图片管理 - 分类管理
//         'adminAdvertisementSort' => 'admin/AdvertisementSort',
//         # 会员管理 - 会员列表
//         'adminMember' => 'admin/Member',
//         # 会员管理 - 等级管理
//         'adminMemberLevel' => 'admin/MemberLevel',
//         # 会员管理 - 会员记录管理
//         'adminMemberRecord' => 'admin/MemberRecord',
//         # 消息管理 - 留言列表
//         'adminMessage' => 'admin/Message',
//         # 消息管理 - 意见反馈
//         'adminMessageFeedback' => 'admin/MessageFeedback',
//         # 文章管理 - 文章列表
//         'adminArticle' => 'admin/Article',
//         # 文章管理 - 文章分类
//         'adminArticleSort' => 'admin/ArticleSort',
//         # 管理员管理 - 权限管理
//         'adminJurisdiction' => 'admin/Jurisdiction',
//         # 管理员管理 - 管理员列表
//         'adminstrators' => 'admin/Adminstrators',
//     ],
// ];