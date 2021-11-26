<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDetails extends Model
{
    use HasFactory;

    protected $table = "product-details";

    protected $with = [
        'cart',
        'users'
     ];

    // public function cart () {
    //     return $this->belongsTo(Product::class);
    //    }

    //    public function users () {
    //     return $this->belongsTo(User::class);
    //    }
}
