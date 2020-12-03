
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>找回密码</title>

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
    <form class="am-form" id="log-form" action="/admin/res" method="post">
        {{csrf_field()}}
        @if(session('errMsg'))
            <div class="log-alert am-alert am-alert-danger am-radius" style="margin-bottom: 5px;height: 38px;line-height: 38px;background-color: #FF4081">{{session('errMsg')}}</div>
        @endif

        <div class="hand"></div>
        <div class="hand rgt"></div>
        <div class="login_link">
            <a class="btn"  href="{{action('Admin\LoginController@login')}}">登录</a>
        </div>


        <h1>找回密码</h1>
        <div class="form-group">
            <input type="text" name="username" value="{{old('username')}}" required="required" class="form-control">
            <label class="form-label">用户名</label>
        </div>
        <div class="form-group">
            <input type="text" name="secret"  required="required" class="form-control">
            <label class="form-label">滚学球令牌</label>
        </div>
        <div class="form-group">
            <input type="password" name="pwd"  id="password" required="required" class="form-control">
            <label class="form-label">请输入密码</label>
            <p class="alert">验证未通过！</p>

            <button class="btn">修 改</button>
        </div>

    </form>

</div>

<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/script.js"></script>
<script>

</script>
<div style="text-align:center;">
    <p> © 2020 滚学球</p>
</div>

</body>
</html>