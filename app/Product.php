<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";
    public function product_type (){
        return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function bell_detail (){
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
