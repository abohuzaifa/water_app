<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Location extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        "name",
        "category_id",
        "lat",
        "long",
        "address",
        "status",
        "user_id",
        "images"
    ];
}
