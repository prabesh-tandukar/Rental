<?php

namespace App\Http\Controllers\User;

use App\Models\Property;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function map()
    {
        $Property = new Property();
        $Properties = $Property->getAll();
        return view('Frontend/map')->with(array('property' => $Properties));
    }
}
