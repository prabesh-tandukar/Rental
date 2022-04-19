<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function detail($title)
    {

        // $this->property = app()->make('App\Models\Property');

        $Property = new Property();
        $propertyDetail = $Property->getPropertyByTitle($title);

        return view('Frontend/property-detail')->with(array('property' => $propertyDetail));
    }
}
