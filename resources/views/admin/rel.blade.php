
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>注册账号</title>

    <link rel="stylesheet" href="/static/admin/css/style.css">
    <style>
        .foot {
            top: 420px;
        }
        form {
            height: 380px;
        }
        .text {
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>

<body>

<div class="dwo">
    <div class="panda">
        <div class="ear"></div>
        <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
                <div class="eye-ball"></div>
            </div>
            <div class="eye-shade rgt"></div>
            <div class="eye-white rgt">
                <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
        </div>
        <div class="body"> </div>
        <div class="foot">
            <div class="finger"></div>
        </div>
        <div class="foot rgt">
            <div class="finger"></div>
        </div>
    </div>
    <form class="am-form" id="log-form" action="/admin/rel" method="post">
        {{csrf_field()}}

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="log-alert am-alert am-alert-danger am-radius" style="top: 61px;height: 38px;line-height: 38px">{{$error}}</div>
            @endforeach
        @endif
        @if(session('errMsg'))
            <div class="log-alert am-alert am-alert-danger am-radius" style="margin-bottom: 5px;height: 38px;line-height: 38px;background-color: #FF4081">{{session('errMsg')}}</div>
        @endif

        <div class="hand"></div>
        <div class="hand rgt"></div>
        <div class="login_link">
            <a class="btn"  href="{{action('Admin\LoginController@login')}}">登录</a>
        </div>


        <h1>注册账号</h1>
        <div class="form-group">
            <input type="text"  name="username" value="{{old('username')}}" required="required" class="form-control">
            <label class="form-label">用户名</label>
        </div>
        <div class="form-group">
            <input type="password" name="pwd" id="log-password" required="required" class="form-control am-form-field am-radius log-input">
            <label class="form-label">密码</label>
        </div>
        <div class="form-group">
            <input type="password" name="pwd2" id="password" data-equal-to="#log-password" required="required" class="form-control am-form-field am-radius log-input">
            <label class="form-label">确认密码</label>
            <p class="alert">验证未通过！</p>
            <button class="btn">注 册</button>
        </div>

    </form>
    <div class="text">注册提交后请联系滚学球通过注册</div>

</div>

<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/relScript.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/static/home/assets/js/amazeui.min.js"></script>
<script src="/static/home/assets/js/app.js"></script>
<div style="text-align:center;">
    <p> © 2020 滚学球</p>
</div>

</body>
</html>