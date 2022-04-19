<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function index($id)
    {


        $Property = new Property();
        $propertyDetail = $Property->getPropertyById($id);

        $prop = Property::find($id);
        $images = $prop->images;

        return view('User/PropertyDetail/index')->with(array('property' => $propertyDetail, 'images' => $images));
    }
}
