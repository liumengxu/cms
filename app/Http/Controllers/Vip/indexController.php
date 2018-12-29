<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order\indexModel;

class indexController extends Controller
{
    public function cart($id){
//        echo __METHOD__;
//        echo 123;
        echo "ID".$id;
        $cart=indexModel::where(['id'=>$id])->first()->toArray();
        echo "<pre>";print_r($cart);
    }
}
