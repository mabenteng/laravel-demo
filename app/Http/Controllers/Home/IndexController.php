<?php
/*
 * @Description: In User Settings Edit
 * @Author: benty
 * @Date: 2019-09-06 03:33:16
 * @LastEditTime: 2019-09-09 05:55:31
 * @LastEditors: Please set LastEditors
 */
//上面的注释是智能的?,nb
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;//不是controller目录会自动引入controller基类
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Input;
Use DB;
use App\home\User;
use App\home\Bank;
//use Request;
use Input;
use Cache;
use Session;
class IndexController extends Controller
{
    /**
     * @description: 
     * @param {type} 
     * @return: 
     */
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
    public function ind(Request $request)
    {
        if(Input::method()=="POST"){
            //先验证数据,required少些一个d就报错
            $this->validate($request,[
                'name'=>'required|min:2',
                'age'=>'required',
                'addr'=>'required',
                'capt'=>'required|captcha'
            ]);
            $datatmp=$request->all();
            unset($datatmp['capt']);
            //判断上传文件
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                $path=md5($datatmp['img'].time().rand(3333, 999999)).".".$request->file('img')->getClientOriginalExtension();
                if ($request->file('img')
                    ->move('./img',$path)) {
                    echo "图片上传成功";
                }
                $datatmp['img']="./img/".$path;
            }
            if(true && User::create($datatmp)){
                //添加成功,跳转到列表页面
                return redirect('list');
            }else{
                //dump($datatmp);
                $ming=$datatmp['img'].time().rand(3333,999999);
                //dump($ming);
                echo $request->file('img')->getClientOriginalExtension();
                
                
                echo "添加错误,请重试.";
            }
        }
        $data=$request->all();
        //Session::pull('name','我是一号;')
        //dump(Session::all());
        // $map['addr']='台湾';
        // $map['other']="我是唱歌的";
        //$data=DB::table('user')->get();
        //踩坑纪念,这里compact函数不能放入with里面
        return view('home.ind',compact('data'));
    }
    /**
     * @description: 定义列表函数
     * @param {type} 
     * @return: 
     */    
    public function listp($id="1"){
        //显示分页数据
        //$id1=$id;list页面不能用缓存
        //$data=Cache::get('data');
        
        if (empty($data)) {
            $data=User::paginate(3);
            Cache::put('data', $data, '1');//设定缓存
        }
        return view('home.listp',compact('data'));
    }
    /**
     * @description: 
     * @param {type} 
     * @return: 
     */    
    public function xiugai(Request $request,$id="1"){
        if(Input::method()=="POST"){
            //先验证数据,required少些一个d就报错
            //dd($id);
            $this->validate($request,[
                //'name'=>'required',
                'age'=>'required',
                'addr'=>'required',
                'capt'=>'required|captcha',
                'file'=>'image'
            ]);
            $datatmp=$request->all();
            unset($datatmp['capt']);
            //判断上传文件//这里可以判断如果修改了文件就删掉之前的文件
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                if (!empty($request->oldimg)) {
                    @unlink($request->oldimg);
                }
                $path=md5($datatmp['img'].time().rand(3333, 999999)).".".$request->file('img')->getClientOriginalExtension();
                if ($request->file('img')
                    ->move('./img',$path)) {
                    echo "图片上传成功";
                }
                $datatmp['img']="./img/".$path;
            }
            //删除_token
            unset($datatmp['oldimg']);
            unset($datatmp['_token']);
            if(true && User::where('id',$id)->update($datatmp)){
                //添加成功,跳转到列表页面
                return redirect('list');
            }else{
                
                
                
                echo "添加错误,请重试.";
            }
        }
        //修改信息页面
        $data=User::find($id);
        return view('home.xiugai',compact('data'));
    }
}
