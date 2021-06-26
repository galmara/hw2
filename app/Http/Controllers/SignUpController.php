<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

    class SignUpController extends Controller{
        
        public function sign(){
            $request = request();
            $err = false;
            
            if (!$this -> checkMail($request) && !$this -> checkPsw($request) && !$this -> checkPhone($request)) {
                $newCustomer = Customer::insertGetId([
                'name' => $request['name'],
                'surname' => $request['surname'],
                'phone' => $request['phone'],
                'psw' => Hash::make($request['psw']),
                'mail' => $request['mail']
                ]);

                if (isset($newCustomer)) {
                    Session::put('id', $newCustomer);
                    return view('welcome')
                    ->with('crsf', csrf_token())
                    ->with('customer', Customer::find($newCustomer));
                }
            }
            else{
                $err = true;
                return view('signup') -> with('err', $err);
            }
        }

        public function checkMail($query){
            $mail = false;
            if(filter_var($query['mail'], FILTER_VALIDATE_EMAIL)){
                $mail = Customer::where('mail', $query['mail'])->exists();
            }
            else{
                return true;
            }
            return $mail;
        }

        public function mail($query){
            $mail = Customer::where('mail', $query)->exists();
            $found = 0;
            if($mail){
                $found=1;
            }
            return $found;
        }

        public function checkPsw($query){
            $err = false;
            if(!preg_match('/^[a-zA-Z0-9!£$%&@]{8,16}$/', $query["psw"])){
                $err=true;  
            } 
            else{
                if($query["psw"] !== $query["psw_conf"]){
                    $err=true;    
                }
            }
            return $err;
        }

        public function checkPhone($query){
            $err = false;
            if(!preg_match('/^[0-9+]{10,}$/', $query['phone'])){
                $err=true;
            }
        }

    }

?>