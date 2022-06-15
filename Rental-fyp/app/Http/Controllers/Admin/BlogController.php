<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Blog::latest()->paginate(5);
        return view('admin.blog.index', compact('blog'));
    }
    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $input = $request->all();

        $imageName = '';
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/blog_images'), $imageName);
            $input['image'] = "$imageName";
        }

        Blog::create($input);

        return redirect()->route('admin.blog.index')->with(array('success' => 'Blog created succesfully.'));
    }

    public function edit(Blog $blog)
    {

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        $input = $request->all();


        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/blog_images'), $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $blog->update($input);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog deleted successfully');
    }
}
