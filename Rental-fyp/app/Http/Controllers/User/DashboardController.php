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
        $activeProperty = Property::where('status', '=', 'active')->where('user_id', '=', $currentUser)->count();
        $rejectProperty = Property::where('status', '=', 'reject')->where('user_id', '=', $currentUser)->count();
        $pendingProperty = Property::where('status', '=', 'pending')->where('user_id', '=', $currentUser)->count();

        $Property = new Property();

        $property = $Property->getLatestProperty();
        // dd($activeProperty);
        return view('User/dashboard', compact('activeProperty', 'rejectProperty', 'pendingProperty', 'property'));
    }
}
