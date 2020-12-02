<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;


class IndexController extends Controller
{
//    首页
    public function index()
    {
        $articleDatas = Article::orderBy('id','desc')->paginate(5);
        return view('home.index',[
            'articleDatas' => $articleDatas,
        ]);
    }
}
