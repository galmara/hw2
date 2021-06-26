<?php

namespace App\Http\Controllers;


    use Illuminate\Routing\Controller;
    use App\Models\Customer;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Session;

    class HomeController extends Controller{

        public function loadSpotify(){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://accounts.spotify.com/api/token");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials"); 
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded','Authorization: Basic '.base64_encode(env('SPOTIFY_CLIENT_ID').':'.env('SPOTIFY_CLIENT_SECRET'))));
            $res = curl_exec($curl);
            $token = json_decode($res) -> access_token;
            curl_close($curl);

            $url = 'https://api.spotify.com/v1/browse/new-releases?limit=5';
            $curl =  curl_init();
            curl_setopt($curl, CURLOPT_URL, $url); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' .$token));
            $releases = curl_exec($curl);
            print($releases);
            curl_close($curl);

        }

        public function searchOnSongsterr($query){
            if (isset($query)){
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, "http://www.songsterr.com/a/ra/songs.json?pattern=" .urlencode($query));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $tabs=curl_exec($curl);
                curl_close($curl);
                echo $tabs;
            }
        }

        public function verifyUser(){
            $customer = Customer::find(session('id'));
            if(isset($customer)){
                return view('welcome')
                ->with('customer', $customer);
            }
            else {
                return view('welcome');
            }
        }

        
    }


?>