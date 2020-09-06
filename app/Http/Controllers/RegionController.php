<?php

namespace App\Http\Controllers;

use App\Region;
use App\Http\Resources\RegionResource;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::orderBy('id')->get();
        return RegionResource::collection($regions);
    }

    public function show(Region $region){
        return new RegionResource($region);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'region_no' => 'required|min:1|max:3',
            'region_name' => 'required|min:4|max:255',
        ]);
    }

    public function store(){
        // validation
        $data = $this->validateRequest();
        $region = Region::create($data);
        return new RegionResource($region);
    }

    public function update(Region $region){
        // validation
        $data = $this->validateRequest();
        $region->update($data);
        return new RegionResource($region);
    }

    public function destroy(Region $region){
        // validation
        $region->delete($region);
        return response()->noContent();
    }
}
