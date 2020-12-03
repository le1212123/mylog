<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;


class IndexController extends Controller
{
//    首页
    public function index(Request $request)
    {
        $search = $request->query('search');
        $article = Article::orderBy('id','desc');

        if ($search) {
            $article->where('title','like','%' . $search . '%');
        }

        $articleDatas = $article->paginate(5);
        return view('home.index',[
            'articleDatas' => $articleDatas,
            'search' => $search,
        ]);
    }

    public function aboutMe()
    {
        return view('myname.myname');
    }
}
