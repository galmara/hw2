<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Customer;
    use App\Models\Order;
    use Illuminate\Support\Facades\Session;

    class OrdersController extends Controller{

        public function index(){
            $customer = Customer::find(session('id'));
            if($customer){
                return view('orders')
                ->with('customer', $customer);
            }
        } 

        public function showOrders(){
            $id = session('id');
            $orders = Order::where('customer', $id) -> get();
            return $orders;
        }


    }


?>