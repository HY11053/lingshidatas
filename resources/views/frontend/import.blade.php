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
<h1 class="text-center">零食品牌数据生成</h1>
<hr/>
<div class="ccol-md-6 col-md-offset-3">
    <h3 class="timeline-header"><a href="">数据提交选项</a></h3>
    <hr/>
    <form class="form-horizontal" method="post" action="/importdatas">
        {{csrf_field()}}
        <div class="form-group col-md-6">
            <select name="type" class="form-control">
                <option value="jmlc">加盟流程</option>
                <option value="jmtj">加盟条件</option>
                <option value="jmzc">加盟支持</option>
                <option value="xzjq">选址技巧</option>
                <option value="jyjq">经营技巧</option>
                <option value="tzfx">投资分析</option>
                <option value="lrfx">利润分析</option>
                <option value="comment">品牌评论</option>
            </select>
        </div>
        <div class="col-md-12">
            <h3 class="timeline-header"><a href="">内容提交区域 一条一行</a></h3>
        </div>
        <div class="form-group col-md-6">
            <textarea class="form-control" name="content" rows="30"></textarea>

        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">提交数据</button>
        </div>


    </form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

