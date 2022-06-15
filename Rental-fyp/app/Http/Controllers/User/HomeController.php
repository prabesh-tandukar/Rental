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

        // $activeProperty = Property::where('status', '=', 'approved')->where('user_id', '=', $currentUser)->count();
        $latestProperty = $Property->getLatestProperty()->where('status', '=', 'approved');

        $Blog = new Blog();
        $latestBlog = $Blog->getLatestBlog();
        return view('Frontend/Index')->with(array('latestProperty' => $latestProperty, 'latestBlog' => $latestBlog));
    }
}
