
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>小乐博客</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="/static/home/assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/static/home/assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-static-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="/static/home/assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="static/home/assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <link rel="stylesheet" href="/static/home/assets/css/amazeui.min.css">
    <link rel="stylesheet" href="/static/home/assets/css/app.css">
</head>
<body>
<header>
    <div class="log-re">
        <a style="color: #fff" href="{{action('Admin\LoginController@rel')}}" class="am-btn am-btn-default am-radius log-button">注册</a>
    </div>
</header>

<div class="log">
    <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-8 am-u-sm-centered log-content">
            <h1 class="log-title am-animation-slide-top">账号登录</h1>
            @if(session('errMsg'))
            <div class="log-alert am-alert am-alert-danger am-radius" style="top: 45px;height: 38px;line-height: 38px">{{session('errMsg')}}</div>
            @endif
            <br>
            <form class="am-form" id="log-form" action="/admin/login" method="post">
                {{csrf_field()}}
                <div class="am-input-group am-radius am-animation-slide-left">
                    <input type="text" name="username" value="{{old('username')}}" id="doc-vld-email-2-1" class="am-radius" data-validation-message="请输入正确的账号" placeholder="账号" required/>
                    <span class="am-input-group-label log-icon am-radius"><i class="am-icon-user am-icon-sm am-icon-fw"></i></span>
                </div>
                <br>
                <div class="am-input-group am-animation-slide-left log-animation-delay">
                    <input type="password" name="pwd" class="am-form-field am-radius log-input" placeholder="密码" minlength="6" required>
                    <span class="am-input-group-label log-icon am-radius"><i class="am-icon-lock am-icon-sm am-icon-fw"></i></span>
                </div>
                <br>
                <button type="submit" class="am-btn am-btn-primary am-btn-block am-btn-lg am-radius am-animation-slide-bottom log-animation-delay">登 录</button>
                <p class="am-animation-slide-bottom log-animation-delay"><a href="{{action('Admin\LoginController@res')}}">忘记密码?</a></p>
            </form>
        </div>
    </div>
    <footer class="log-footer">
        © 2020 滚学球
    </footer>
</div>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/home/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="static/home/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/static/home/assets/js/amazeui.min.js"></script>
<script src="/static/home/assets/js/app.js"></script>
</body>
</html>