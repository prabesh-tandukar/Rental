<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';

    protected $fillable = [
        'property_title','address','property_category','road_size','road_type','distance','distance_unit','built_year','bedroom','kitchen','bathroom','livingroom','parking','amenities','description','price','price_unit','negotiable','owner_name','owner_email','owner_phone','location','upload_image', 'latitude', 'longitude'
    ];

    public function setAmenitiesAttribute($value)
    {
        $this->attributes['amenities'] = json_encode($value);
    }

    public function getAmenitiesAttribute($value)
    {
        return $this->attributes['amenities'] = json_decode($value);
    }

    public function setUploadImageAttribute($value) 
    {
        $this->attributes['upload_image'] = json_encode($value);
    }

    public function getPropertyById($propertyId) {
        $property = Property::where('id', $propertyId)->first();
        return $property;
    }
}



// 'property_title','address','property_category','road_size','road_type','distance','distance_unit','built_year','bedroom','kitchen','bathroom','livingroom','parking','amenities','description','price','price_unit','negotiable','owner_name','owner_email','owner_phone','location','upload_image'

