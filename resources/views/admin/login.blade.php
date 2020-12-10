<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页面</title>
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
                    <input type="text" placeholder="用户名/手机号" required />
                </div>
                <div class="tableItem">
                    <i class="userLock"></i>
                    <input type="password" placeholder="密码" required/>
                </div>
                <div class="tableAuto clear">
                    <a class="autoMatic fl" href="#">
                        <input class="loadGiet"  type="checkbox"/>自动登录</a>
                    <a class="fr" href="#">忘记密码？</a>
                </div>
                <button class="tableBtn">登录</button>
            </form>
        </div>
    </div>
</body>
</html>