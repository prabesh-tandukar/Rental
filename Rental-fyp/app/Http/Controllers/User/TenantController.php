<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TenantRequest;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;


class TenantController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tenant = Tenant::latest()->paginate(5);
        return view('User.Tenant.index', compact('tenant'));
    }

    public function create()
    {

        $userId = Auth::id();

        return view('User.Tenant.create', ['user' => User::all(), 'userId' => $userId,]);
    }

    public function store(Request $request)
    {

        // $id = auth()->user()->user_id;
        // if ($request->method() == 'POST') {
        //     $requestObj = app(TenantRequest::class);
        //     $validatedData = $requestObj->validated();

        //     Tenant::create($validatedData);
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        // Product::create($request->all());

        // return redirect()->route('products.index')
        //                 ->with('success','Product created successfully.');

        return redirect()->route('')->with(array('success' => 'Tenant added successfully.'));
    }
}
