<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class LoginController extends Controller
{
    private $secret = 'gunxueqiu9527';

//    登录首页
    public function login()
    {
        return view('admin.login');
    }

//    处理登录
    public function addLogin(Request $request, Users $users)
    {
        $data = $request->only('username', 'pwd');
        $resData = $users::getUser($data['username']);

        if (!$resData) {
            return redirect('/admin/login')->with('errMsg', '不存在该用户')->withInput();
        }
        if ($data['username'] != $resData->username) {
            return redirect('/admin/login')->with('errMsg', '账号不存在')->withInput();
        }
        if (!password_verify($data['pwd'], $resData->pwd)) {
            return redirect('/admin/login')->with('errMsg', '密码不正确')->withInput();
        }
        if ($resData->status != 1) {
            return redirect('admin/login')->with('errMsg', '账号异常')->withInput();
        }

        $request->session()->put('name', true);


        if ($data['username'] == 'admin') {
            return view('admin.index', [
                'resData' => $resData,
            ]);
        } else {
            $articleDatas = Article::orderBy('id','desc')->paginate(5);
           return redirect('property/search')->with(compact('articleDatas'));
        }

    }

//    注册页
    public function rel()
    {
        return view('admin.rel');
    }

//    处理注册
    public function torel(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|max:20|regex:/[a-zA-Z0-9]/',
            'pwd' => 'required|alpha_num',
        ],[
            'required' => ':attribute必须填写',
            'max' => ':attribute长度不能超过:max位',
            'regex' => ':attribute必须是字母或数字结合',
        ],[
            'username' => '账号',
            'pwd' => '密码',
        ]);
        $data = $request->only('username', 'pwd');
        $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);

        $resData = Users::getUser($data['username']);
        if ($resData) {
            return back()->with('errMsg', '用户名已存在')->withInput();
        }

        $res = Users::addUser($data);
        if (!$res) {
            return back()->with('errMsg', '注册失败')->withInput();
        }

        return redirect('admin/login');
    }

//    忘记密码
    public function res()
    {
        return view('admin.res');
    }

//    处理忘记密码
    public function dores(Request $request)
    {
        $data = $request->only('username', 'secret', 'pwd');
        $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);

        $res = Users::updataUser($data['username'], $data['pwd']);
        if ($res) {
            return back()->with('errMsg', '账号不存在')->withInput();
        }
        if ($data['secret'] !== $this->secret) {
            return back()->with('errMsg', '令牌错误')->withInput();
        }

        return redirect('admin/login');
    }

//    退出登录
    public function loginOut(Request $request)
    {
        $request->session()->forget('name');
        return redirect('admin/login');
    }
}
