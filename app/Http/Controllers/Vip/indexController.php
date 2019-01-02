<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order\indexModel;

class indexController extends Controller
{
    //查询
    public function cart($id){
//        echo __METHOD__;
//        echo 123;
        echo "ID".$id;
        $cart=indexModel::where(['id'=>$id])->first()->toArray();
        echo "<pre>";print_r($cart);
    }
    //增加
    public function add(){
        $data=[
            'name'=>str_random(3),
            'sex'=>"男",
            'age'=>rand(1,100),
            'create_time'=>time()
        ];
        $add=indexModel::insert($data);
        var_dump($add);
    }
    //修改
    public function update($id){
        $where=[
            'id'=>$id
        ];
        $data=[
            'name'=>str_random(3),
            'sex'=>"男",
            'age'=>rand(1,100),
            'create_time'=>time()
        ];
        $update=indexModel::where($where)->update($data);
        var_dump($update);
    }
    //删除
    public function delete($id){
        $where=[
            'id'=>$id
        ];
        $del=indexModel::where($where)->delete();
        var_dump($del);
    }
    //渲染模板
    public function lista(){
        $list=indexModel::all();
        $data=[
            'list'=>$list
        ];
        return view("order.order",$data);
    }
    public function buga(){
        echo __METHOD__;
    }
}
