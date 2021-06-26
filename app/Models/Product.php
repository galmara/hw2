<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $table = 'products';

    protected $fillable = [
        'cod', 'name', 'description', 'price', 'type', 'img_path'
    ];

    public function customer(){
        return $this -> belongsTo("App\Models\Order");
    }
}

?>