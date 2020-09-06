<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'id' ,
        'region_no' ,
        'region_name'
    ];

    public function cities(){
        return $this->hasMany(City::class);
    }
}
