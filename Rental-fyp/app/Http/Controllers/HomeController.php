<?php

namespace App\Http\Controllers;

use App\Models\Property;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $Property = new Property();

        $latestProperty = $Property->getLatestProperty();
        return view('Frontend/Index')->with(array('latestProperty'=>$latestProperty));
    }
}
