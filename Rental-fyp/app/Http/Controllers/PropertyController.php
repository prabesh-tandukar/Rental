<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;

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
            // $input['amenities'] = $requestObj->input('amenities');
            $validatedData = $requestObj->validated();
            // dd($request);
            $validatedData['amenities']= $requestObj->input('amenities');
            // $imageName = time().'.'.request()->upload_image->getClientOriginalExtension();
            // request()->upload_image->move(public_path('uploads/property-images'), $imageName);
            // $validatedData['upload_image'] = $imageName;
            Property::create($validatedData);
            return redirect()->route('property.create')    
                             ->with(array('success'=>'Property added successfully.'));
        }
        // return view('admin.coupon.createcoupon')->with(array('breadcrumb'=>$breadcrumb,'primary_menu'=>'coupons'));
        // $validated = $request->validated();
        
        // return redirect()->route('property.create')
        //                     ->with('success', 'Property added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
