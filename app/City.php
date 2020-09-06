<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id','city_id' , 'city_name' , 'region_no'
    ];

    public function region(){

        return $this->belongsTo(Regions::class);
    }

    public function districts(){

        return $this->hasMany(District::class);
    }

}
