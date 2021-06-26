<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Customer;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    class LoginController extends Controller{

        public function login(){
            $err = false;
            $err_p = false;
            $customer = Customer::where('mail', request('mail')) ->first();
            if(isset($customer)){
                if(Hash::check(request('psw'), $customer -> psw)){
                    Session::put('id', $customer -> ID);
                    return view('welcome')
                    ->with('crsf', csrf_token())
                    ->with('customer', $customer);
                }
                else{
                    $err_p = true;
                    return view('login')
                    ->with('err_p', $err_p);
                }
            }
            else{
                $err = true;
                return view('login')
                ->with('err', $err);
            }
        }

        public function logout(){
            Session::flush();
            return redirect('welcome');
        }
        
    }


?>