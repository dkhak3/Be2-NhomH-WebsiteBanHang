<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="products";
    protected $fillable = [
        'product_photo',
        'product_name',
        'product_price',
        //'type',
        'product_description',
    ];
}