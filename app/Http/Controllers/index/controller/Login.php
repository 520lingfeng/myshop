<?php
namespace app\index\controller;
use think\Controller;
use sms\facade\Send;
use think\facade\Request;

class Login extends Controller
{
    # 登录页
    public function login()
    {
        return $this->fetch('login');
    }

    # 注册页
    public function register()
    {
        if (Request::isPost()) {

        }
        return $this->fetch('register');
    }

    # 获取注册码
    public function getMobileYzm() {
        return Send::getYzm(input('post.yzmtel'));
    }
    # 验证验证码
    public function varificationCode() {
        return Send::code(input('post.code'));
    }
}