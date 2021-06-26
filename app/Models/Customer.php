<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    protected $table = 'customers';
    public $timestamps = false;

    
    protected $fillable = [
        'name', 'surname', 'phone', 'psw', 'mail'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function order(){
        return $this -> hasMany("App\Models\Order");
    }

    public function cart(){
        return $this -> hasOne("App\Models\Cart");
    }   
}