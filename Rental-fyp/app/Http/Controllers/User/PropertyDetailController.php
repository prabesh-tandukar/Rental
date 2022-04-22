<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Models\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    public function index($id)
    {


        $Property = new Property();
        $propertyDetail = $Property->getPropertyById($id);

        $prop = Property::find($id);
        $images = $prop->images;

        $propertyUserId = $propertyDetail->user_id;
        // dd($propertyUserId);
        $user = new User();
        $userInfo = $user->getUserById($propertyUserId);

        return view('User/PropertyDetail/index')->with(array('property' => $propertyDetail, 'images' => $images, 'user' => $userInfo));
    }
}
