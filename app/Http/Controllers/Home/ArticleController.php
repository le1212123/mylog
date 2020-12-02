<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    //    文章详情
    public function content($id)
    {
        $contentData = Article::where('id',$id)->first();
        $comments = Comment::orderBy('id','desc')->paginate(10);
        return view('home.content',[
            'contentData' => $contentData,
            'comments' => $comments,
        ]);
    }

//    添加评论
    public function addComment(Request $request)
    {
        $inputData = $request->only('name','content');
        if(Comment::create($inputData)) {
            return back();
        } else {
            return back()->with('errMsg','添加失败');
        }
    }
}
