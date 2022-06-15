<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $currentUser = auth()->user()->id;

        // $numOfUser = User::where('is_admin', '=', '0')->count();
        $activeProperty = Property::where('status', '=', 'approved')->where('user_id', '=', $currentUser)->count();
        $rejectProperty = Property::where('status', '=', 'rejected')->where('user_id', '=', $currentUser)->count();
        $pendingProperty = Property::where('status', '=', 'pending')->where('user_id', '=', $currentUser)->count();

        $activeProp = Property::where('status', '=', 'approved')->where('user_id', '=', $currentUser);
        $rejectProp = Property::where('status', '=', 'rejected')->where('user_id', '=', $currentUser);
        $pendingProp = Property::where('status', '=', 'pending')->where('user_id', '=', $currentUser)->get();

        $userProperty = Property::where('user_id', '=', $currentUser)->get();

        $Property = new Property();


        $property = $Property->getLatestProperty();
        // dd($activeProperty);
        return view('User/dashboard', compact('activeProperty', 'rejectProperty', 'pendingProperty', 'property', 'pendingProp', 'userProperty'));
    }
}
