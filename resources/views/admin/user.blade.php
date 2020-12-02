@extends('layout.parent')

@section('content')
    <div class="row-fluid">
        <div class="page-header">
            <h1>Users <small>All users</small></h1>
        </div>
        <table style="list-style: none" class="table table-striped table-bordered table-condensed">
            <thead>

            <tr>
                <th>序号</th>
                <th>ID</th>
                <th>username</th>
                <th>Status</th>

            </tr>

            </thead>
            <tbody>
            @foreach($userDatas as $userData)
                <tr class="list-users">

                    <td>{{$loop->iteration}}</td>
                    <td>{{$userData->id}}</td>
                    <td>{{$userData->username}}</td>
                    <td>{{$userData->status}}</td>
                    <td>
                        <li>
                            @if($userData->status == 0)
                                <a href="{{action('Admin\IndexController@addUser',['id'=> $userData->id])}}"><i class="icon-pencil"></i> 通过注册</a>
                            @endif
                            @if($userData->username != 'admin')
                                <a href="{{action('Admin\IndexController@delUser',['id' => $userData->id])}}"><i class="icon-trash"></i> 删除用户</a>
                            @endif
                        </li>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection