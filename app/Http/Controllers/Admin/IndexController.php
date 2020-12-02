<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

//    后台首页
    public function show()
    {
        $userDatas = Users::get();
        return view('admin.user',[
            'userDatas' => $userDatas,
        ]);
    }

//    用户管理-----------------------
//    通过注册
    public function addUser($id)
    {
        $res = Users::createUser($id);
        if ($res) {
            return back();
        }
    }

//    删除用户
    public function delUser($id)
    {
        $res = Users::delUser($id);
       if ($res) {
           return back();
       }
    }
}