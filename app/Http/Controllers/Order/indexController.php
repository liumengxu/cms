<?php
    namespace app\Http\Controllers\Order;
    use Illuminate\Routing\Controller;
    use App\Order\indexModel;
    class indexController extends Controller{
        public function detail(){
            echo __METHOD__;
            echo 1;
        }
        public function use(){
            echo __METHOD__;
            echo 2;
        }
        public function cart(){
            echo __METHOD__;
        }
    }