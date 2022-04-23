<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'property_category' => 'required',
            'road_size' => '',
            'road_type' => '',
            'distance' => '',
            'distance_unit' => '',
            'built_year' => '',
            'bedroom' => '',
            'kitchen' => '',
            'bathroom' => '',
            'livingroom' => '',
            'parking' => '',
            'amenities' => '',
            'description' => '',
            'price' => 'required',
            'price_unit' => 'required',
            'negotiable' => '',
            'owner_name' => '',
            'owner_email' => '',
            'owner_phone' => '',
            'location' => '',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'latitude' => '',
            'longitude' => '',
            'user_id' => '',
            'status' => ''
        ];
    }
}
