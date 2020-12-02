<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = [
        'username',
        'pwd',
        'status',
    ];

//    查询用户
    public static function getUser($username)
    {
        return self::where('username', $username)->first();

    }

//    添加注册用户
    public static function addUser($data)
    {
        return self::create($data);
    }

//  修改密码
    public static function updataUser($username, $pwd)
    {
        $resData = self::getUser($username);
        if (! $resData) {
            return true;
        }

        $resData->pwd = $pwd;
        $resData->save();
    }


//    通过注册
    public static function createUser($id)
    {
        $userData = Users::find($id);
        $userData->status = 1;
       $res = $userData->save();
       if ($res) {
           return true;
       }
       dd('删除失败！');

    }

//    删除用户
    public static function delUser($id)
    {
       return self::where('id',$id)->delete();

    }
}
