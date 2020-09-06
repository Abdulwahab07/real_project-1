<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'offer_title'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function realEstate()
    {
        return $this->hasOne(RealEstate::class);
    }
}
