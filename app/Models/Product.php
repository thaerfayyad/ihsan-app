<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'status', 'category_id', 'price', 'size', 'quantity'];



protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order(){
        return $this->belongsToMany(Order::class,'order_product','product_id','order_id');
    }
}
