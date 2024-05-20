<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Ad_request extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'seller_id',
        'image',
        'discount',
        'start_date',
        'end_date',
        'user_type',
        'product_id',
        'description'
    ];
}
