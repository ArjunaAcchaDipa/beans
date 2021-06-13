<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "coffee";
    protected $fillable = [
        'name',
        'rating',
        'shop_pict',
        'shop_pict1',
        'shop_pict2',
        'shop_pict3',
        'shop_pict4',
        'menu_pict',
        'menu_pict1',
        'location_pict',
    ];

    // public function comment(){
    //     return $this->hasMany(Comment::class)->whereNull('');
    // }
}