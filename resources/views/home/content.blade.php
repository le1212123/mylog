<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>文章详情</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/static/home/assets/i/app-icon72x72@2x.png">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/static/home/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="/static/home/assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="/static/home/assets/css/amazeui.min.css">
    <link rel="stylesheet" href="/static/home/assets/css/app.css">
</head>

<body id="blog-article-sidebar">
<!-- header start -->
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img src="/static/home/assets/i/logo.jpg" alt="我的Logo"/>
    </div>
    <div style="" class="log-re">
        <a style="background-color: #0e90d2;" href="{{action('Admin\LoginController@login')}}" class="am-btn am-btn-default am-radius log-button">登录</a>
        <a style="background-color: #0e90d2;" href="{{action('Admin\LoginController@rel')}}" class="am-btn am-btn-default am-radius log-button">注册</a>
    </div>
</header>
<!-- header end -->
<hr>

<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li><a href="{{action('Home\IndexController@index')}}">首页</a></li>
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<!-- nav end -->
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <article class="am-article blog-article-p">
            <div class="am-article-hd">
                <h1 class="am-article-title blog-text-center">我的文章哎</h1>
                <p class="am-article-meta blog-text-center">
                    <span><a href="#" class="blog-color">article &nbsp;</a></span>-
                    <span><a href="#">@amazeUI &nbsp;</a></span>-
                    <span><a href="#">2015/10/9</a></span>
                </p>
            </div>
            <div class="am-article-bd">
                <img width="100%" id="image" src="" alt="" class="blog-entry-img blog-article-margin">
            </div>
        </article>


        <hr>
        <div class="am-g blog-author blog-article-margin">
            <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
                <img src="/static/home/assets/i/f12.jpg" alt="" class="blog-author-img am-circle">
            </div>
            <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
                <h3><span>作者 &nbsp;: &nbsp;</span><span class="blog-color">滚学球</span></h3>
                <p>
                    {!! $contentData->content !!}
                </p>
            </div>
        </div>
        <hr>

        @foreach($comments as $comment)
            <div class="am-g blog-author blog-article-margin">
                <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
                    <h3>
                        <span class="blog-color">{{$comment->name}}:</span>
                        <span style="color: rgba(191,191,191,0.89);font-size: 14px">{{$comment->created_at}}</span>
                    </h3>
                    <p>
                        {{$comment->content}}
                    </p>
                </div>
            </div>
        @endforeach

        <hr>

        @if(session('errMsg'))
            <div class="log-alert am-alert am-alert-danger am-radius" style="top: 45px;height: 38px;line-height: 38px">
                {{session('errMsg')}}
            </div>
        @endif

        <form action="/comment" method="post" class="am-form am-g">
            {{csrf_field()}}
            <h3 class="blog-comment">评论</h3>
            <fieldset>
                <div class="am-form-group am-u-sm-4 blog-clear-left">
                    <input type="text" name="name" class="" placeholder="名字">
                </div>
                <div class="am-form-group">
                    <textarea class="" name="content" rows="5" placeholder="内容"></textarea>
                </div>

                <p>
                    <button type="submit" class="am-btn am-btn-default">发表评论</button>
                </p>
            </fieldset>
        </form>

        <hr>
    </div>
</div>
<!-- content end -->
<footer class="blog-footer">
    <div class="am-u-sm-12 am-u-md-4- blog-text-center">
        <h3>社交账号</h3>
        <p>
            <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
            <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
        </p>
    </div>
    <div class="blog-text-center">© 2020 滚学球</div>
</footer>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/home/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/static/home/assets/js/amazeui.min.js"></script>
<script>
    {{--  获取cookie保存的img地址  --}}
    function getCookie(name) {
        var prefix = name + "="
        var start = document.cookie.indexOf(prefix)

        if (start == -1) {
            return null;
        }

        var end = document.cookie.indexOf(";", start + prefix.length)
        if (end == -1) {
            end = document.cookie.length;
        }

        var value = document.cookie.substring(start + prefix.length, end)
        return unescape(value);
    }

    var image = document.querySelector('#image');
    var cookieImg = getCookie('imgurl');
    image.src = cookieImg;

</script>
</body>
</html>