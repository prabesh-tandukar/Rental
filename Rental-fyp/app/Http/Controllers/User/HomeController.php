<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Models\Blog;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $Property = new Property();

        $latestProperty = $Property->getLatestProperty();

        $Blog = new Blog();
        $latestBlog = $Blog->getLatestBlog();
        return view('Frontend/Index')->with(array('latestProperty' => $latestProperty, 'latestBlog' => $latestBlog));
    }
}
