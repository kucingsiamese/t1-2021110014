<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable = [
        'id', 'product_name', 'description', 'retail_price', 'wholesale_price', 'origin', 'quantity', 'product_image'
    ];
    public $timestamps = true;
}
