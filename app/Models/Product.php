<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'product_name',
        'product_price',
        'category_id',
    ];
    public function category () {
     return $this->belongsTo(category::class);
    }

    public function Carts(){

        return $this->hasMany(Cart::class);
    }
}
