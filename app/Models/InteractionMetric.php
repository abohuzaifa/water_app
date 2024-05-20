<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class InteractionMetric extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'ad_id',
        'user_id',
        'is_like',
        'is_click',
        'is_impression'
    ];
}
