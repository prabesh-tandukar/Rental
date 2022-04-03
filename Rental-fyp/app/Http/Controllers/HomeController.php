<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {


        $latestProperty = Property::getLatestProperty();
        return view('Frontend/Index')->with(array('latestProperty'=>$latestProperty));
    }
}
