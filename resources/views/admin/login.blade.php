<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页面</title>
    <meta name="keywords" content="商城登录" />
    <meta name="description" content="120 words 商城登录" />
    <link rel="icon" href="/favicon.ico" type="image/gif" />
	<link rel="stylesheet" href="{{URL::asset(__STATIC__.'css/base.css')}}" />
    <link rel="stylesheet" href="{{URL::asset(__STATIC__.'css/load.css')}}" />
	<script type="text/javascript" src="{{URL::asset(__STATIC__.'js/jquery-1.7.2.min.js')}}"></script>
</head>
<body>
    <div class="innerBody clear">
        <div class="tableWrap">
            <form action="#">
                <div class="tableTap clear">
                    <h3 class="fl">用户登录</h3>
                </div>
                <div class="tableItem">
                    <i class="userHead"></i>
                    <input type="text" name="usercode" placeholder="账号/手机号" required />
                </div>
                <div class="tableItem">
                    <i class="userLock"></i>
                    <input type="password" name="password" placeholder="密码" required/>
                </div>
                <div class="tableAuto clear">
                    <a class="fl" href="/register">注册</a>
                    <a class="fr" href="#">忘记密码？</a>
                </div>
                <button class="tableBtn">登录</button>
            </form>
        </div>
    </div>
</body>

</html>