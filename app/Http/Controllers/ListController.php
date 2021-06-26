<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Product;
    use App\Models\Customer;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    class ListController extends Controller{

        public function index(){
            $customer = Customer::find(session('id'));
            if($customer){
                return view('list')
                ->with('customer', $customer);
            }
            else {
                return view('list');
            }
        } 

        public function showProducts(){
            echo Product::all();
        }

        public function singleProduct($query){
            $product = Product::where('name', $query)->first();
            echo $product;
        }
       
    }


?>