<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{

//    添加文章
    public function addArticle()
    {
        $itemData = Item::get();
        return view('admin.article',[
            'itemData' => $itemData,
        ]);
    }

//    处理添加文章数据
    public function doAddArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'item_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ],[
            'required' => ':attribute',
        ],[
            'item_id' => '请选择分类名称',
            'title' => '请填写标题',
            'content' => '内容为空: 内容输入完请按一下回车键或点击一下文本框~',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/add-article')
                ->withErrors($validator)
                ->withInput();
        }

        $inputData = $request->only('item_id','title','content');
        if (! strip_tags($inputData['content'])) {
            return back()->with('errMsg','内容为空');
        }

        $res = Article::create($inputData);
        if ($res) {
            return back()->with('errMsg','添加成功');
        }
    }

//    删除文章
    public function delArticle()
    {
        $articleDatas = Article::orderBy('id','desc')->paginate(5);
        return view('admin.delArticle',[
            'articleDatas' => $articleDatas
        ]);
    }


//    处理删除文章
    public function doDelArticle($id)
    {
        Article::where('id',$id)->delete();
        return back();
    }
}
