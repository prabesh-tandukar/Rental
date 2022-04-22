<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutUsController extends Controller
{

    public function index()
    {
        $about = About::latest()->paginate(5);
        return view('admin.aboutUs.index', compact('about'));
    }
    public function create()
    {
        return view('admin.aboutUs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $imageName = '';
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/aboutUs_images'), $imageName);
        }

        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imageName;
        $about->save();

        return redirect()->route('admin.aboutUs.index')->with(array('success' => 'About us details filled succesfully.'));
    }

    public function edit(About $about)
    {

        return view('admin.aboutUs.edit', compact('about'));
    }

    public function update(Request $request, About $abouts)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $about = new About();
        $imageName = '';
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/aboutUs_images'), $imageName);
            $about->image = $imageName;
        } else {
            $about->image = $request->image;
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->update();
    }

    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('admin.aboutUs.index')
            ->with('success', 'About us deleted successfully');
    }
}
