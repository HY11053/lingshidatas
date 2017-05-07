<?php

namespace App\Http\Controllers;

use App\Models\ArticleDatas;
use App\Models\Comment;
use App\Models\JmlcDatas;
use App\Models\JmtjDatas;
use App\Models\JmysDatas;
use App\Models\JmzcDatas;
use App\Models\JyjqDatas;
use App\Models\LrfxDatas;
use App\Models\TzfxDatas;
use App\Models\XzjqDatas;
use Illuminate\Http\Request;

class CreateArticle extends Controller
{
    public function Create()
    {
        return view('frontend.createarticle');
    }
    function CreateDatas(Request $request)
    {
        $brand=$request->input('brandname');
        $jmlc=$request->input('jmlc');
        $jmtj=$request->input('jmtj');
        $jmzc=$request->input('jmzc');
        $xzjq=$request->input('xzjq');
        $jyjq=$request->input('jyjq');
        $tzfx=$request->input('tzfx');
        $lrfx=$request->input('lrfx');
        $comment=$request->input('comment');
        $jmlcdatas=$request->input('jmlc')?JmlcDatas::whereIn('id',$this->ranger(JmlcDatas::max('id'),rand(6,10)))->get():'';
        $jmtjdatas=$request->input('jmtj')?JmtjDatas::whereIn('id',$this->ranger(JmtjDatas::max('id'),rand(6,10)))->get():'';
        $jmzcdatas=$request->input('jmzc')?JmzcDatas::whereIn('id',$this->ranger(JmzcDatas::max('id'),rand(6,10)))->get():'';
        $jmysdatas=$request->input('jmys')?JmysDatas::whereIn('id',$this->ranger(JmysDatas::max('id'),rand(6,10)))->get():'';
        $xzjqdatas=$request->input('xzjq')?XzjqDatas::whereIn('id',$this->ranger(XzjqDatas::max('id'),rand(6,10)))->get():'';
        $jyjqdatas=$request->input('jyjq')?JyjqDatas::whereIn('id',$this->ranger(JyjqDatas::max('id'),rand(6,10)))->get():'';
        $tzfxdatas=$request->input('tzfx')?TzfxDatas::whereIn('id',$this->ranger(TzfxDatas::max('id'),rand(6,10)))->get():'';
        $lrfxdatas=$request->input('lrfx')?LrfxDatas::whereIn('id',$this->ranger(LrfxDatas::max('id'),rand(6,10)))->get():'';
        $comments=$request->input('comment')?Comment::whereIn('id',$this->ranger(Comment::max('id'),rand(6,10)))->get():'';
        return view('frontend.createarticled',compact(
            'jmlcdatas','jmtjdatas','jmysdatas',
            'jmzcdatas','xzjqdatas','jyjqdatas','lrfxdatas',
            'tzfxdatas','comments','brand',
            'jmlc','jmtj','jmzc','xzjq','jyjq','tzfx','lrfx','comment'));
    }
    function Import()
    {
        return view('frontend.import');
    }
    function ranger($countnum,$num)
    {
        $numbers = range (1,$countnum);
        //shuffle 将数组顺序随即打乱
        shuffle ($numbers);
        //array_slice 取该数组中的某一段
        $num=$num;
        $result = array_slice($numbers,0,$num);
        return $result;
    }
    public function ImportDatas(Request $request)
    {
        $contents=explode("\r\n",$request->input('content'));
        //dd($contents);
        switch ($request->input('type'))
        {

            case 'jmlc':

                foreach ($contents as $content)
                {
                    JmlcDatas::create(['jmlc'=>$content]);
                }
                break;
            case 'jmtj':
                foreach ($contents as $content)
                {
                    JmtjDatas::create(['jmtj'=>$content]);
                }
                break;
            case 'jmzc':
                foreach ($contents as $content)
                {
                    JmzcDatas::create(['jmzc'=>$content]);
                }
                break;
            case 'xzjq':
                foreach ($contents as $content)
                {
                    XzjqDatas::create(['xzjq'=>$content]);
                }
                break;
            case 'jyjq':
                foreach ($contents as $content)
                {
                    JyjqDatas::create(['jyjq'=>$content]);
                }
                break;
            case 'tzfx':
                foreach ($contents as $content)
                {
                    TzfxDatas::create(['tzfx'=>$content]);
                }
                break;
            case 'lrfx':
                foreach ($contents as $content)
                {
                    LrfxDatas::create(['lrfx'=>$content]);
                }
                break;
            case 'comment':
                foreach ($contents as $content)
                {
                    Comment::create(['comment'=>$content]);
                }
                break;
        }
        echo '提交成功';
    }
}
