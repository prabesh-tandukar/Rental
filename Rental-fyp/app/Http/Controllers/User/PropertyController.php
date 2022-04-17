<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Http\Controllers\Controller;
use Image;
use Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User/Property/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User/Property/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->method() == 'POST') {
            $requestObj = app(PropertyRequest::class);

            $validatedData = $requestObj->validated();


            $validatedData['amenities'] = $requestObj->input('amenities');

            $images = [];
            if ($request->hasfile('upload_image')) {
                foreach ($request->file('upload_image') as $file) {
                    $name = time() . rand(1, 50) . '.' . $file->extension();
                    $file->move(public_path('uploads/property-images'), $name);
                    $images[] = $name;
                }
            }

            // $property = new Property();
            // $property->upload_image = $images;
            // $property->save();

            $validatedData['upload_image'] = $images;

            Property::create($validatedData);

            return redirect()->route('user.property.create')
                ->with(array('success' => 'Property added successfully.'));
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function catelog()
    {
        return view('Frontend/property');
    }
}
