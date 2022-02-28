<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['address_address', 'address_longitude','address_latitude' , 'user_id', 'product_id', 'status', 'quantity','price'];

    //relation
    public function user(){
        return $this->belongsTo(User::class);
    }
    //end of user function

    public function products(){
        return $this->belongsToMany(Product::class,'order_product','order_id','product_id');
    }

    // public function order_product(){
    //     return $this->hasMany(OrderProduct::class,'order_id','id');
    // }

}//end of class
