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
    <h3 class="timeline-header"><a href="">数据生成选项</a></h3>
    <hr/>
    <form class="form-horizontal" method="post" action="/createarticle">
        {{csrf_field()}}
        <div class="form-group has-success has-feedback">
            <div class="col-md-6">
                <label class="checkbox-inline" for="inputSuccess3">品牌名称</label>
                <input type="text" class="form-control" id="brandname" name="brandname" @if(isset($brand)) value="{{$brand}}" @endif aria-describedby="inputSuccess3Status">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess3Status" class="sr-only">(success)</span>
            </div>
        </div>
        <hr/>
        <div class="form-group ">

            <label class="checkbox-inline">
                <input type="checkbox" id="jmlc" @if(isset($jmlc)) checked @endif name="jmlc" value="jmlc"> 加盟流程
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="jmtj" @if(isset($jmtj)) checked @endif name="jmtj" value="jmtj"> 加盟条件
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="jmzc" @if(isset($jmzc)) checked @endif name="jmzc" value="jmzc"> 加盟支持
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="xzjq" @if(isset($xzjq)) checked @endif name="xzjq" value="xzjq"> 选址技巧
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="jyjq" @if(isset($jyjq)) checked @endif name="jyjq" value="jyjq"> 经营技巧
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="tzfx" @if(isset($tzfx)) checked @endif name="tzfx" value="tzfx"> 投资分析
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="lrfx" @if(isset($lrfx)) checked @endif name="lrfx" value="lrfx"> 利润分析
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="comment" @if(isset($comment)) checked @endif name="comment" value="comment"> 品牌评论
            </label>
        </div>
        <hr/>
        <h3 class="timeline-header"><a href="">是否进行同义词替换</a></h3>
        <hr/>
        <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="replaces" id="replace" value="0"> 否
            </label>
            <label class="radio-inline">
                <input type="radio" name="replaces" id="replace" value="0"> 是
            </label>

        </div>
        <hr/>
        <button type="submit" class="btn btn-primary">生成数据</button>

    </form>
</div>
<hr>
<div class="col-md-6 col-md-offset-3">
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($jmlc))<h2>{{$brand}}加盟流程</h2> @endif
       @if(isset($jmlcdatas) && !empty($jmlcdatas))

           @foreach($jmlcdatas as $index=>$jmlcdata)
               <p>{{$index+1}}、{{$jmlcdata->jmlc}}</p>
            @endforeach
           @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($jmtj))<h2>{{$brand}}加盟条件</h2> @endif
        @if(isset($jmtjdatas) && !empty($jmtjdatas))

            @foreach($jmtjdatas as $index=>$jmtjdata)
                <p>{{$index+1}}、{{$jmtjdata->jmtj}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($jmzc))<h2>{{$brand}}加盟支持</h2> @endif
        @if(isset($jmzcdatas) && !empty($jmzcdatas))

            @foreach($jmzcdatas as $index=>$jmzcdata)
                <p>{{$index+1}}、{{$jmzcdata->jmzc}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($xzjq))<h2>{{$brand}}选址技巧</h2> @endif
        @if(isset($xzjqdatas) && !empty($xzjqdatas))

            @foreach($xzjqdatas as $index=>$xzjqdata)
                <p>{{$index+1}}、{{$xzjqdata->xzjq}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($jyjq))<h2>{{$brand}}经营技巧</h2> @endif
        @if(isset($jyjqdatas) && !empty($jyjqdatas))

            @foreach($jyjqdatas as $index=>$jyjqdata)
                <p>{{$index+1}}、{{$jyjqdata->jyjq}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($tzfx))<h2>{{$brand}}投资分析</h2> @endif
        @if(isset($tzfxdatas) && !empty($tzfxdatas))

            @foreach($tzfxdatas as $index=>$tzfxdata)
                <p>{{$index+1}}、{{$tzfxdata->tzfx}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($lrfx))<h2>{{$brand}}利润分析</h2> @endif
        @if(isset($lrfxdatas) && !empty($lrfxdatas))

            @foreach($lrfxdatas as $index=>$lrfxdata)
                <p>{{$index+1}}、{{$lrfxdata->lrfx}}</p>
            @endforeach
        @endif
    </div>
    <div class="article">
        @if(isset($brand) && !empty($brand) && isset($comment))<h2>{{$brand}}品牌评论</h2> @endif
        @if(isset($comments) && !empty($comments))

            @foreach($comments as $index=>$comment)
                <p>{{$index+1}}、{{$comment->comment}}</p>
            @endforeach
        @endif
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

