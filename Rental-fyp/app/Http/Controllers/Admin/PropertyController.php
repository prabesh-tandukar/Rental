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

        if ($request->method() == 'PUT') {
            $requestObj = app(PropertyRequest::class);
            $validatedData = $requestObj->validated();

            Property::update($id, $validatedData);
            $validateData = $request->validated();
            $property->update($validateData);

            return redirect()->route('admin.property.index')->with('success', 'Succefully Edited');
        };
    }
}
