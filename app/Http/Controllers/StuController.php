<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StuController extends Controller
{
    //
    public function index(){
    	$list = \DB::table("user")->get();
    	return view('stu.index',["list"=>$list]);
    }

    public function edit($id)
    {
       $stu = \DB::table('user')->where('id',$id)->first();
       return view('stu.edit',['vo'=>$stu]);
    }

    public function create()
    {
        return view("stu.add");

    }

    public function update(REQUEST $request,$id)
    {
        $data = $request->only("name","password");
        //dd($data);
         \DB::table('user')->where("id",$id)->update($data);
        return redirect("/stu");

    }

    public function destroy($id)
    {   
        \DB::table('user')->where("id",$id)->delete();
        return back();

    }

    public function show($id)
    {
      return "查看学生信息Id:".$id;

    }

    public function store(REQUEST $request)
    {
        //获得表单传过来的值
       $data = $request->only('name','password');
       //将值传入数据库
      $id = \DB::table('user')->insertGetId($data);//执行添加返回Id值
        //dd($data);
     // if($id>0){
      //  echo '添加成功';
     // }
    }
}
