<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function map() {
        $Property = new Property();
        $Properties = $Property->getAll();
        return view('Frontend/map')->with(array('property'=>$Properties));
    }
   
}

