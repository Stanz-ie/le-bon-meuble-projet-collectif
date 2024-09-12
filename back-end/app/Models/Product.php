<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable = ['productName', 'categoryId', 'description', 'price', 'color', 'material', 'quantity', 'status', 'image'];

    public $timestamps = false;
}
