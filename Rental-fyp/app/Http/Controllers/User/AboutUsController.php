<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutUsController extends Controller
{
    public function about()
    {
        $about = new About();
        $eachAbout = $about->first();
        return view('Frontend/about ', compact('eachAbout'));
    }
}
