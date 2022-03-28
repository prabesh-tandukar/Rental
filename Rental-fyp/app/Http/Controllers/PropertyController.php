<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend/submit_property');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->method()=='POST') 
        {
            $requestObj = app(PropertyRequest::class);
            
            $validatedData = $requestObj->validated();
        
            $validatedData['amenities']= $requestObj->input('amenities');

            $image = array();
            if($files = $request->file('upload_image')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name. '.'.$ext;
                    $upload_path = (public_path(). '/uploads');
                    $image_url = ($upload_path.$image_full_name);
                    $file->move($upload_path, $image_full_name);
                    $image[] = $image_url;
                }
            }

            $validatedData['upload_images'] = implode('|', $image);

                Property::create($validatedData);

                
                
                return redirect()->route('property.create')    
                             ->with(array('success'=>'Property added successfully.'));
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

    public function catelog() {
        return view('Frontend/property');
    }

    public function detail() {
        return view('Frontend/property-detail');
    }

}