<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>零食品牌数据查询</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 class="text-center">零食品牌数据查询</h1>
<hr/>
<div class="row">
    <div class="col-md-8">
        <form method="post" action="/brands/view">
            {{ csrf_field() }}
        <div class="form-group col-md-4">
            <select class="form-control form-group select2 col-md-8" name="type">
                <option selected="selected" value="{{$type}}">{{$type}}</option>
                <option value="所有品牌">所有品牌</option>
                <option value="零食店品牌">零食店品牌</option>
                <option value="干果品牌">干果品牌</option>
                <option value="炒货品牌">炒货品牌</option>
                <option value="进口零食品牌">进口零食品牌</option>
                <option value="熟食品牌">熟食品牌</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-group col-md-3 col-xs-12" style="padding-top: 5px;">统计</label>
            <div class="col-md-8">
                <input type="number" id="number" name="nums"   @if(!empty($nums)) value="{{$nums}}" @else value="1" @endif" class="form-control ">
            </div>
        </div>

        <div class="col-md-4">
            <label class="col-md-4 col-xs-12" style="padding-top:5px;">搜索</label>
            <button c id="send" type="submit" class="col-md-8 btn btn-success">搜索</button>
        </div>
        </form>
    </div>
</div>
<div class="col-md-12"><em>共有：{{$datas->total()}}个品牌</em></div>
<div class="col-md-12">
    <div class="bs-example" data-example-id="hoverable-table">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>分类</th>
                <th>统计次数</th>
                <th>品牌名称</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $index=>$data)
            <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$data->type}}</td>
                <td>{{$data->nums}}</td>
                <td>{{$data->brands}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$datas->appends(['type'=>$type,'nums'=>$nums])->links()}}
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

