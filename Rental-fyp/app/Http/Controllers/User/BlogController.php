<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog($id)
    {
        $blog = new blog();
        $blogDetail = $blog->getBlogById($id);
        return view('Frontend/blog ', compact('blogDetail'));
    }
}
