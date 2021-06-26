<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Customer;
    use App\Models\Product;
    use App\Models\Cart;  
    use App\Models\Order;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    class CartController extends Controller{

        public function index(){
            $customer = Customer::find(session('id'));
            if($customer){
                return view('cart')
                ->with('customer', $customer);
            }
        } 

        public function showCart(){
            $id = session('id');
            $products = Cart::where('customer', $id) -> get();
            $array = array();
            $prod = array();
            $amount = 0;
            if ($products) {
                foreach ($products as $product) {
                    $item = Product::where('cod', $product -> product) -> first();
                    $prod[] = $item;
                    $price = $item -> price;
                    $amount = ($amount + $price);
                }
            }
            $array["prod"] = $prod;
            $array["amount"] = $amount;
            return $array;
        }
        
        public function deleteProduct($query){
            $product = Product::where('name', $query) -> first();
            $delete = Cart::where('product', $product -> cod) 
            ->where('customer', session('id'))->delete();

        }

        public function sendOrder(){
            $amount = 0;
            $products = Cart::where('customer', session('id')) -> get();
            foreach($products as $product){
                $item = Product::where('cod', $product -> product) -> first();
                $price = $item -> price;
                $amount = ($amount + $price);
            }

            $order = Order::create([
                'products' => $amount,
                'date' => date('Y/m/d'),
                'customer' => session('id')
            ]);

            $delete = Cart::where('customer', session('id')) -> delete();

        }


    }


?>