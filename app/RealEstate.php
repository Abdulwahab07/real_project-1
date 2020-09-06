<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RealEstate extends Model
{
    use SoftDeletes;

protected $fillable = [
'title'
,'region_id'
,'city_id'
,'district_id'
,'official'
,'tract'
,'suburb'
,'north'
,'east'
,'urban_range'
,'land_mark'
,'land_mark_closer'
,'type_id'
,'building_type'
,'building_status'
,'property_age'
,'property_details'
,'land_nature'
,'property_long'
,'property_width'
,'property_full_area'
,'building_long'
,'building_width'
,'building_area'
,'total_building_area'
,'total_building_area_details'
,'document_type_id'
,'document_involve_all'
,'how_much_involved'
,'warranties'
,'warranties_details'
,'power'
,'power_size'
,'water_source'
,'water_tank'
,'sanitation'
,'closer_masjed'
,'boy_schools'
,'girl_schools'
,'is_offered'
,'offer'
,'offer_date'
,'price_per_meter'
,'last_price'
,'Negotiable'
,'marketing'
,'Marketing_authorization_details'
,'user_id'
];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
