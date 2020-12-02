@extends('layout.parent')

@section('content')
    <div class="row-fluid">
        <div class="page-header">
            <h1>分类管理 <small>添加分类</small></h1>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <h2 style="color: red">{{$error}}</h2>
            @endforeach
        @endif

        <table style="list-style: none" class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>序号</th>
                <th>ID</th>
                <th>分类名称</th>

            </tr>
            </thead>
            <tbody>
            @foreach($itemData as $item)
                <tr class="list-users">

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="/admin/add-item" method="post" class="form-horizontal">
            {{csrf_field()}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="name">分类名称</label>
                    <div class="controls">
                        <input type="text" name="name" class="input-xlarge" id="name" value="">
                    </div>
                    <div class="form-actions">
                        <input type="submit" class="btn btn-success btn-large" value="添加">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection