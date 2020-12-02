@extends('layout.parent')

@section('content')
    <div class="row-fluid">
        <div class="page-header">
            <h1>Article <small>All Article</small></h1>
        </div>
        <table style="list-style: none" class="table table-striped table-bordered table-condensed">
            <thead>

            <tr>
                <th>序号</th>
                <th>ID</th>
                <th>标题</th>
                <th>内容</th>
                <th>添加时间</th>

            </tr>

            </thead>
            <tbody>
            @foreach($articleDatas as $articleData)
                <tr class="list-users">

                    <td>{{$loop->iteration}}</td>
                    <td>{{$articleData->id}}</td>
                    <td>{{$articleData->title}}</td>
                    <td>{{$articleData->content}}</td>
                    <td>{{$articleData->created_at}}</td>
                    <td>
                        <li>
                          <a href="{{action('Admin\ArticleController@doDelArticle',['id' => $articleData->id])}}"><i class="icon-trash"></i> 删除文章</a>
                        </li>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{$articleDatas->links()}}
        </div>
    </div>
@endsection