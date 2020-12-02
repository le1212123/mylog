<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function addItems()
    {
        $itemData = Item::get();
        
        return view('admin.item',[
            'itemData' => $itemData,
        ]);
    }

    public function doAddItems(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:10|unique:item',
        ],[
            'required' => ':attribute必须填写',
            'min' => ':attribute不能小于:min个字符',
            'max' => ':attribute不能大于:max个字符',
            'unique' => ':attribute分类名已经存在',
        ],[
            'name' => '分类名称'
        ]);
        $name = $request->input('name');
        $res = Item::addItem($name);
        if ($res) {
            return back();
        }
    }
}
