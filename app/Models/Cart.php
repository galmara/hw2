<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
    protected $table = 'cart';
    public $timestamps = false;


    protected $fillable = [
        'customer', 'product'
    ];

    public function customer(){
        return $this -> belongsTo("App\Models\Customer");
    }

    public function products(){
        return $this -> hasMany("App\Models\Product");
    }
}


?>