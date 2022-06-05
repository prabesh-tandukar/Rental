<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Status;

class PropertyController extends Controller
{
    public function index()
    {
        $allProperties = Property::simplePaginate(10);
        // $prop = Property::find($id);
        // $images = $prop->images;
        return view('Admin.Property.index', compact('allProperties'));
    }

    public function approve($id)
    {


        $Property = new Property();
        $propertyDetail = $Property->getPropertyById($id);

        $prop = Property::find($id);
        $images = $prop->images;
        $Status = $prop->status;

        $propertyUserId = $propertyDetail->user_id;
        $user = new User();
        $userInfo = $user->getUserById($propertyUserId);



        return view('Admin.Property.approve')->with(array('property' => $propertyDetail, 'images' => $images, 'user' => $userInfo, 'tatus' => $Status));
    }

    public function approved($id)
    {

        $data = property::find($id);
        $data->status = 'approved';
        $data->save();


        return redirect()->back();
    }

    public function rejected($id)
    {

        $data = property::find($id);
        $data->status = 'rejected';
        $data->save();


        return redirect()->back();
    }
}
