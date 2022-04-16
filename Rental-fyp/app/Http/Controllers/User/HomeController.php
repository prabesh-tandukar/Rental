<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $Property = new Property();

        $latestProperty = $Property->getLatestProperty();
        return view('Frontend/Index')->with(array('latestProperty' => $latestProperty));
    }
}
