<?php

namespace App\Http\Controllers\Traveling;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\City\City;
use App\Models\Province\Province;
class TravelingController extends Controller
{




    public function about($id){

        $cities = City::select()->orderBy('id', 'desc')->take(5)->where('province_id', $id)->get();


        $province =  Province::find($id);

        $citiesCount =  City::select()->where('province_id', $id)->count();

        return view('traveling.about', compact('cities', 'province', 'citiesCount'));
    }
}
