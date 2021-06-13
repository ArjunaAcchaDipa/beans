<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "review";
    protected $fillable = [
        'review_body',
        'user_id',
        'shop_id'
    ];
}
