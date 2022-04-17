<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function detail($title) {

        // $this->property = app()->make('App\Models\Property');
        $propertyDetail = Property::getPropertyByTitle($title);

        return view('Frontend/property-detail')->with(array('property'=>$propertyDetail));
    }

}  

