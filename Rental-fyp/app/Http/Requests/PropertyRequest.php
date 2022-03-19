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
            'property_title'=>'required',
            'address'=>'required',
            'property_category'=>'required',
            'road_size'=>'',
            'road_type'=>'',
            'distance'=>'',
            'distance_unit'=>'',
            'built_year'=>'',
            'bedroom'=>'',
            'kitchen'=>'',
            'bathroom'=>'',
            'livingroom'=>'',
            'parking'=>'',
            'amenities'=>'',
            'description'=>'',
            'price'=>'required',
            'price_unit'=>'required',
            'negotiable'=>'',
            'owner_name'=>'required',
            'owner_email'=>'required',
            'owner_phone'=>'required',
            'location'=>'',
            'upload_image'=>'',
        ];
    }
}
