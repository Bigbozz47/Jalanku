<?php

namespace App\Models\Province;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    use HasFactory;


    protected $table = "provinces";

    protected $fillables = [
        "name",
        "population",
        "territory",
        "avg_price",
        "description",
        "image",
        "island"
    ];

    public $timestamps = true;

}
