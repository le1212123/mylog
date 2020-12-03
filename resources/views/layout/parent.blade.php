<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">

    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
	<link href="/static/admin/css/site.css" rel="stylesheet">
    <link href="/static/admin/css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="/static/admin/js/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">控制台</a>
          <div class="btn-group pull-right">
			<a class="btn" href="my-profile.html"><i class="icon-user"></i>Admin</a>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="divider"></li>
              <li><a href="{{action('Admin\LoginController@addLogin')}}">退出登录</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
			<li><a href="{{action('Home\IndexController@index')}}">博客首页</a></li>
              <li><a href="{{action('Admin\ArticleController@addArticle')}}">添加文章</a>
			  </li>
              <li><a href="{{action('Admin\ItemController@addItems')}}">添加分类</a>
			  </li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><i class="icon-wrench"></i> 人员管理</li>
              <li><a href="{{action('Admin\IndexController@show')}}">人员管理</a></li>
              <li class="nav-header"><i class="icon-wrench"></i> 文章管理</li>
              <li><a href="{{action('Admin\ArticleController@addArticle')}}">添加文章</a></li>
              <li><a href="{{action('Admin\ArticleController@delArticle')}}">删除文章</a></li>

              <li class="nav-header"><i class="icon-wrench"></i> 分类管理</li>
              <li><a href="{{action('Admin\ItemController@addItems')}}">添加分类</a></li>
            </ul>
          </div>
        </div>
        <div class="span9">
            @yield('content')
        </div>
      </div>

      <hr>

      <footer class="well">
       <p> © 2020 滚学球</p>
      </footer>

    </div>

    <script src="/static/admin/js/jquery.js"></script>
	<script src="/static/admin/js/bootstrap.min.js"></script>
  @yield('footer-js')
  </body>
</html>
