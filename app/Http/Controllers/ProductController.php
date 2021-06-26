<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Customer;
    use App\Models\Product;
    use App\Models\Cart;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    class ProductController extends Controller{

        public function index(){
            $customer = Customer::find(session('id'));
            if($customer){
                return view('product')
                ->with('customer', $customer);
            }
            else {
                return view('product');
            }
        } 

        public function addToCart($query){
            $id = session('id');
            $product = Product::where('name', $query)->first();
            $item = Cart::create([
                'customer' => $id,
                'product' => $product -> cod
            ]);
        }       
    }


?>