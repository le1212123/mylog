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
        @if(session('errMsg'))
            <h2 style="color: red">{{session('errMsg')}}</h2>
        @endif
        <form action="/admin/add-article" method="post" class="form-horizontal">
            {{csrf_field()}}

            <div class="control-group">
                <label class="control-label" for="name">分类名称</label>
                <div class="controls">
                    <select name="item_id" id="name">
                        <option value="">---- 请选择 ----</option>
                        @foreach($itemData as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <label class="control-label" for="title">标题</label>
                <div class="controls">
                    <input type="text" name="title" class="input-xlarge" id="title" value="{{old('title')}}">
                </div>
                <h2>文章内容:</h2>
                <div id="editor">
                    <p>{{strip_tags(old('content'))}}</p>
                </div>
                <textarea name="content" id="content" style="display: none"></textarea>
                <input type="submit" class="btn btn-success btn-large" value="添加">
            </div>

        </form>
    </div>
@endsection

@section('footer-js')
    <script type="text/javascript" src="/static/admin/wangEditor//wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')

        editor.customConfig.onchange = function (html) {
            $('#content').val(html);
        }
        editor.create()
    </script>
@endsection