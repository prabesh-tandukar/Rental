<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;

class PropertyController extends Controller
{
    public function index()
    {
        $allProperties = Property::simplePaginate(10);
        return view('Admin.Property.index', compact('allProperties'));
    }

    public function approve($id)
    {


        $Property = new Property();
        $propertyDetail = $Property->getPropertyById($id);

        $prop = Property::find($id);
        $images = $prop->images;

        $propertyUserId = $propertyDetail->user_id;
        $user = new User();
        $userInfo = $user->getUserById($propertyUserId);

        return view('Admin.Property.approve')->with(array('property' => $propertyDetail, 'images' => $images, 'user' => $userInfo));
    }

    public function update(Request $request, Property $property, $id)
    {
        // $validate = $request->validate([
        //     'property_title' => '',
        //     'address' => '',
        //     'city' => '',
        //     'property_category' => '',
        //     'road_size' => '',
        //     'road_type' => '',
        //     'distance' => '',
        //     'distance_unit' => '',
        //     'built_year' => '',
        //     'bedroom' => '',
        //     'kitchen' => '',
        //     'bathroom' => '',
        //     'livingroom' => '',
        //     'parking' => '',
        //     'amenities' => '',
        //     'description' => '',
        //     'price' => '',
        //     'price_unit' => '',
        //     'negotiable' => '',
        //     'owner_name' => '',
        //     'owner_email' => '',
        //     'owner_phone' => '',
        //     'location' => '',
        //     'cover_image' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        //     'user_id' => '',
        //     'status' => ''
        // ]);

        // dd($validate);
        // $changeMethod = $request->status;
        // $coupon->update(array('status' => $changeMethod));

        // $property = new Property();
        // $prop =  $property->getPropertyById($request->id);
        // dd($prop);
        // $changeMethod = $request->status;
        // $coupon = $this->coupon->GetCouponById($request->id);
        // $data = Property::find($request->id);
        // $property->status = $request->input('status');
        if ($request->method() == 'PUT') {
            $requestObj = app(PropertyRequest::class);
            $validatedData = $requestObj->validated();

            Property::update($id, $validatedData);
            $validateData = $request->validated();
            $property->update($validateData);

            return redirect()->route('admin.property.index')->with('success', 'Succefully Edited');
        };
    }

    // public function changeSaveMethod(Request $request)
    // {
    //     $propert
    //     $coupon = $this->coupon->GetCouponById($request->id);
    //     $changeMethod = $request->status;
    //     $coupon->update(array('status' => $changeMethod));
    //     return array('status' => true, 'message' => 'Status Updated Successfully');
    // }
}
