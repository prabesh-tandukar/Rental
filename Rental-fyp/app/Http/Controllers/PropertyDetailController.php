<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function detail($id) {

        // $this->property = app()->make('App\Models\Property');
        $propertyDetail = Property::getPropertyById($id);

        return view('Frontend/property-detail')->with(array('property'=>$propertyDetail));
    }

}  

