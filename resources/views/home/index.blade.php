
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>滚学球博客欢迎你！</title>
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

    <style>
        .links li{
            list-style: none;
            float: left;
            width: 50px;
        }
        .links li a {
            display: inline-block;
            width: 100%;
            height: 100%;
            float: left;
            padding: 0 14px;
            line-height: 34px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0;
        }
        .links li:hover {
            background-color: #ccc;
        }
        .disabled {
            border-left: 1px solid #ddd;;
        }
    </style>
</head>

<body id="blog">

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img src="/static/home/assets/i/logo.jpg" alt="我的Logo"/>
    </div>
    <div style="" class="log-re">
        <a style="background-color: #0e90d2;" href="{{action('Admin\LoginController@login')}}" class="am-btn am-btn-default am-radius log-button">登录</a>
        <a style="background-color: #0e90d2;" href="{{action('Admin\LoginController@rel')}}" class="am-btn am-btn-default am-radius log-button">注册</a>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li ><a href="#">首页</a></li>
        </ul>
        <form action="{{'Home\IndexController@index'}}" method="get" class="am-topbar-form am-topbar-right am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" name="search" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<hr>
<!-- nav end -->
<!-- banner start -->
<div class="am-g blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
        <ul class="am-slides">
            <li style="height: 550px">
                <img style="height: 100%"  src="/static/home/assets/i/f4.png">
                <div class="blog-slider-desc am-slider-desc ">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">欢迎访问博客！ &nbsp;</a></span>
                        <h1 class="blog-h-margin"><a href="">在这里你可以:</a></h1>
                        <p>学习、发表博客、留言博客...
                        </p>
                        <span class="blog-bor">2020/11/1</span>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </li>
            <li style="height: 550px">
                <img style="height: 100%"  src="/static/home/assets/i/f19.jpg">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">欢迎访问博客！ &nbsp;</a></span>
                        <h1 class="blog-h-margin"><a href="">在这里你可以:</a></h1>
                        <p>学习、发表博客、留言博客...
                        </p>
                        <span class="blog-bor">2020/11/1</span>
                    </div>
                </div>
            </li>
            <li style="height: 550px">
                <img style="height: 100%"  src="/static/home/assets/i/f22.jpg">
                <div class="am-slider-desc blog-slider-desc">
                    <div class="blog-text-center blog-slider-con">
                        <span><a href="" class="blog-color">欢迎访问博客！ &nbsp;</a></span>
                        <h1 class="blog-h-margin"><a href="">在这里你可以:</a></h1>
                        <p>学习、发表博客、留言博客...
                        </p>
                        <span class="blog-bor">2020/11/1</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-sm-12">

        @foreach($articleDatas as $articleData)
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img abc">
                    <img  src="/static/home/assets/i/image/f{{mt_rand(1,8)}}.jpg" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="" class="blog-color">滚学球&nbsp;</a></span>
                    <span>{{$articleData->created_at}}</span>
                    <h1><a id="link-content" href="{{action('Home\ArticleController@content',['id' => $articleData->id])}}" target="_blank">{{$articleData->title}}</a></h1>
                    <p>
                        {{strip_tags($articleData->content)}}
                    </p>
                    <p><a href="" class="blog-continue">continue reading</a></p>
                </div>

                <div class="am-u-md-4 am-u-sm-12 blog-sidebar">

                    <div class="blog-sidebar-widget blog-bor">
                        <h2 class="blog-text-center blog-title"><span>联系我们</span></h2>
                        <p>
                            <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                            <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                        </p>
                    </div>
                    <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
                        <h2 class="blog-title"><span>标签</span></h2>
                        <div class="am-u-sm-12 blog-clear-padding">
                            <a href="" class="blog-tag">HTML</a>
                            <a href="" class="blog-tag">程序员</a>
                            <a href="" class="blog-tag">PHP</a>
                            <a href="" class="blog-tag">服务器</a>
                            <a href="" class="blog-tag">MVC</a>
                            <a href="" class="blog-tag">Laravel框架</a>
                            <a href="" class="blog-tag">JavaScript</a>
                        </div>
                    </div>
            </article>
        @endforeach
        <div class="links">
            {{$articleDatas->links()}}
        </div>


        {{--        <ul class="am-pagination">--}}
        {{--            <li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>--}}
        {{--            <li class="am-pagination-next"><a href="">Next &raquo;</a></li>--}}
        {{--        </ul>--}}
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
{{--  img的src属性保存到cookie  --}}
    var acicle = document.querySelectorAll('article');
    var abc = document.querySelectorAll('.abc');
    var content = document.querySelectorAll('#link-content')
    var res = new Array();
    var num;
    var setCookie = function (name, value, day) {
        //当设置的时间等于0时，不设置expires属性，cookie在浏览器关闭后删除
        var expires = day * 24 * 60 * 60 * 1000;
        var exp = new Date();
        exp.setTime(exp.getTime() + expires);
        document.cookie = name + "=" + value + ";expires=" + exp.toUTCString();
    }
    var delCookie = function (name) {
        setCookie(name, ' ', -1);
    };

    for (var i = 0; i < acicle.length; i++) {
        content[i].setAttribute('index',i);
        content[i].onclick = function () {
            for (var j = 0; j < acicle.length; j++) {
                var str = abc[j].children[0]
                res[j] = str.src;

            }
            num = this.getAttribute('index')
            setCookie('imgurl',res[num],1);
        }

    }
</script>
</body>
</html>