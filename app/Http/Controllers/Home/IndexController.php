<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;//不是controller目录会自动引入controller基类
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Input;
Use DB;
use App\Home\User;
class IndexController extends Controller
{
    public function index()
    {
        $map['age']=26;
        // $map['addr']='台湾';
        // $map['other']="我是唱歌的";
        // $data=DB::table('user')->get();
        //踩坑纪念,这里compact函数不能放入with里面
        $data=User::get();
        dd($data);

        return view('home.index',compact('data'));
    }
    // public function head()
    // {
    //     $map['age']=26;
    //     // $map['addr']='台湾';
    //     // $map['other']="我是唱歌的";
    //     $data=DB::table('user')->get();
    //     //踩坑纪念,这里compact函数不能放入with里面
    //     return view('home.index',compact('data'));
    // }
}
