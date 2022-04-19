<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Image;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';

    protected $fillable = [
        'property_title', 'address', 'property_category', 'road_size', 'road_type', 'distance', 'distance_unit', 'built_year', 'bedroom', 'kitchen', 'bathroom', 'livingroom', 'parking', 'amenities', 'description', 'price', 'price_unit', 'negotiable', 'owner_name', 'owner_email', 'owner_phone', 'location', 'cover_image', 'latitude', 'longitude', 'user_id'
    ];

    public function setAmenitiesAttribute($value)
    {
        $this->attributes['amenities'] = json_encode($value);
    }

    public function getAmenitiesAttribute($value)
    {
        return $this->attributes['amenities'] = json_decode($value);
    }

    // public function setUploadImageAttribute($value)
    // {
    //     $this->attributes['upload_image'] = json_encode($value);
    // }

    // public function getUploadImageAttribute($value)
    // {
    //     return $this->attributes['upload_image'] = json_encode($value);
    // }

    //Relationship with user
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //Relationship with images table
    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function getLatestProperty($type = false, $limit = 4, $offset = 0)
    {
        if ($type)
            return Property::type($type)->orderBy('created_at', 'DESC')->take($limit)->skip($offset)->paginate($limit);
        else
            return Property::orderBy('created_at', 'DESC')->take($limit)->skip($offset)->paginate($limit);
    }

    public function getPropertyById($id)
    {
        $property = Property::where('id', $id)->first();
        return $property;
    }

    public function getAll()
    {
        $property =    Property::all();
        return $property;
    }
}
