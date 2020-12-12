<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
    <meta name="keywords" content="商城注册" />
    <meta name="description" content="120 words 商城注册" />
    <link rel="icon" href="/favicon.ico" type="image/gif" />
	<link rel="stylesheet" href="{{URL::asset(__STATIC__.'css/base.css')}}" />
    <link rel="stylesheet" href="{{URL::asset(__STATIC__.'css/load.css')}}" />
	<script type="text/javascript" src="{{URL::asset(__STATIC__.'js/jquery-1.7.2.min.js')}}"></script>
</head>
<body>
    <div class="innerBody clear">
        <div class="tableWrap">
            <form action="register_msg" method="post">
                {{ csrf_field() }}
                <div class="tableTap clear">
                    <h3 class="fl">用户注册</h3>
                </div>
                <div class="tableItem">
                    <i class="userHead"></i>
                    <input type="text" name="usercode" placeholder="请输入账号" />
                </div>
                <div class="tableItem">
                    <i class="userLock"></i>
                    <input type="password" name="password" placeholder="请输入密码" />
                </div>
                <div class="tableAuto clear">
                    <a class="fl" href="#">登录</a>
                    <a class="fr" href="#">忘记密码？</a>
                </div>
                <button class="tableBtn">注册</button>
            </form>
        </div>
    </div>
</body>
</html>