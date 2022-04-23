<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;

class HomeController extends Controller
{
    // public function __contruct() {

    // }

    public function index()
    {
        $numOfUser = User::where('is_admin', '=', '0')->count();
        $numOfProperty = Property::where('status', '=', 'Active')->count();

        return view('admin/home', compact('numOfUser', 'numOfProperty'));
    }
}
