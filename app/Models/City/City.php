<?php

namespace App\Models\City;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    //
    use HasFactory;


    protected $table = "cities";

    protected $fillables = [
        "name",
        "image",
        "price",
        "num_days",
        "province_id"
    ];

    public $timestamps = true;
}
