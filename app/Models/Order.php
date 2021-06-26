<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    protected $table = 'orders';
    public $timestamps = false;


    protected $fillable = [
        'amount', 'shipping', 'products', 'date', 'customer'
    ];

    public function product(){
        return $this -> hasMany("App\Models\Product");
    }

    public function customer(){
        return $this -> belongsTo("App\Models\Customer");
    }
}

?>