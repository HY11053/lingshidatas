<?php

namespace App\Http\Controllers;

use App\Models\BrandDatas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    function CreateDatas()
    {
        $contents = Storage::get('brands.txt');
        $brands = explode("\n",$contents);
        foreach ($brands as $brand)
        {
            if(!empty($brand) && empty(BrandDatas::where('brands','like','%'.$brand.'%')->value('brands')))
            {

                BrandDatas::create(['brands'=>$brand,'type'=>'零食店品牌','nums'=>1]);
                //dd(BrandDatas::where('brands','like','%'.$arr.'%')->value('brands'));
            }else{

                BrandDatas::where('brands',BrandDatas::where('brands',$brand)->value('brands'))->update(['nums'=>BrandDatas::where('brands',$brand)->value('nums')+1]);
            }
        }
    }
    public function GetViews(Request $request)
    {
        $nums=empty($request->input('nums'))?0:$request->input('nums');
        $type=empty($request->input('type'))?'所有品牌':$request->input('type');
        if($type=='所有品牌')
        {
            $datas=BrandDatas::where('nums','>=',$nums)->orderBy('nums','desc')->paginate(50);
        }else{
            $datas=BrandDatas::where('type',$request->input('type'))->where('nums','>=',$nums)->orderBy('nums','desc')->paginate(50);
        }

        return view('frontend.datas',compact('datas','nums','type'));
    }
    public function GetDatas(Request $request)
    {
        $nums=empty($request->input('nums'))?0:$request->input('nums');
        $type=empty($request->input('type'))?'所有品牌':$request->input('type');
        if($request->input('type')=='所有品牌')
        {
            $datas=BrandDatas::where('nums','>=',$nums)->orderBy('nums','desc')->paginate(50);
        }else{
            $datas=BrandDatas::where('type',$request->input('type'))->where('nums','>=',$nums)->orderBy('nums','desc')->paginate(50);
        }


        return view('frontend.datas',compact('datas','nums','type'));
    }
}
