<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Resources\CityResource;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::orderBy('id')->get();
        return CityResource::collection($cities);
    }

    public function show(City $city){
        return new CityResource($city);
    }

    public function store(){
        // validation
        $data = request()->all();
        $city = City::create($data);
        return new CityResource($city);
    }
}
