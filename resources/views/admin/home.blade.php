<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'assets/css/codemirror.css')}}" />
    <!--[if IE 7]>
      <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'assets/css/font-awesome-ie7.min.css')}}" />
    <![endif]-->
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="{{URL::asset(__ADMIN__.'assets/css/ace-ie.min.css')}}" />
    <![endif]-->
      <script type="text/javascript" src="{{URL::asset(__ADMIN__.'assets/js/html5shiv.js')}}"></script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="{{URL::asset(__ADMIN__.'assets/js/respond.min.js')}}"></script>
    <![endif]-->
    <!--[if !IE]> -->
      <script type="text/javascript" src="{{URL::asset(__ADMIN__.'assets/js/jquery.min.js')}}"></script>
    <!-- <![endif]-->
      <script type="text/javascript" src="{{URL::asset(__ADMIN__.'assets/js/bootstrap.min.js')}}"></script>
    <title>后台管理系统</title>
  </head>

  <body>
    <div class="page-content clearfix">
      <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
          <i class="icon-remove"></i>
        </button>
        <i class="icon-ok green"></i>欢迎使用<strong class="green"
          >后台管理系统<small>(v1.2)</small></strong
        >,你本次登陆时间为2016年7月12日13时34分，登陆IP:192.168.1.110.
      </div>
      <div class="state-overview clearfix">
        <div class="col-lg-3 col-sm-6">
          <section class="panel">
            <a href="#" title="商城会员">
              <div class="symbol terques">
                <i class="icon-user"></i>
              </div>
              <div class="value">
                <h1>34522</h1>
                <p>商城用户</p>
              </div>
            </a>
          </section>
        </div>
        <div class="col-lg-3 col-sm-6">
          <section class="panel">
            <div class="symbol red">
              <i class="icon-tags"></i>
            </div>
            <div class="value">
              <h1>140</h1>
              <p>分销记录</p>
            </div>
          </section>
        </div>
        <div class="col-lg-3 col-sm-6">
          <section class="panel">
            <div class="symbol yellow">
              <i class="icon-shopping-cart"></i>
            </div>
            <div class="value">
              <h1>345</h1>
              <p>商城订单</p>
            </div>
          </section>
        </div>
        <div class="col-lg-3 col-sm-6">
          <section class="panel">
            <div class="symbol blue">
              <i class="icon-bar-chart"></i>
            </div>
            <div class="value">
              <h1>￥34,500</h1>
              <p>交易记录</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
