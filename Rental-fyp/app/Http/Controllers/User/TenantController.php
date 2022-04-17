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
use JetBrains\PhpStorm\Internal\TentativeType;

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
        $user = auth()->user()->id;
        // dd($request->tenant_name);

        // $id = auth()->user()->user_id;
        // if ($request->method() == 'POST') {
        //     $requestObj = app(TenantRequest::class);
        //     $validatedData = $requestObj->validated();

        //     Tenant::create($validatedData);
        $request->validate([
            'tenant_name' => 'required',
            'phone' => 'required',
            'joining_date' => 'required',
            'payment_timing' => 'required',
            'rent' => 'required',
            // 'user_id' => 'required',
        ]);

        $tenant = new Tenant();
        $tenant->tenant_name = $request->tenant_name;
        $tenant->phone = $request->phone;
        $tenant->joining_date = $request->joining_date;
        $tenant->payment_timing = $request->payment_timing;
        $tenant->rent = $request->rent;
        $tenant->user_id = $user;
        $tenant->save();
        // Tenant::create($request->all());

        // return redirect()->route('products.index')
        //                 ->with('success','Product created successfully.');

        return redirect()->route('user.tenant.index')->with(array('success' => 'Tenant added successfully.'));
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
