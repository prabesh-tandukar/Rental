<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Property;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Prophecy\Prophet;
use Storage;

class PropertyController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allId = array();
        $images = array();
        $allProperties = Property::paginate(9);

        foreach ($allProperties as $item) {

            $allId[] = $item->id;
        }

        foreach ($allId as $id) {
            $prop = Property::find($id);
            $images[] = $prop->images;
        }

        $image = Image::all();
        // $prop = Property::find($allProperties->id);
        // dd($allId);
        // dd($images);
        $Property = new Property();
        return view('User/Property/index', compact('allProperties', 'image', 'Property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userName = auth()->user()->name;
        $userEmail = auth()->user()->email;
        $userPhone = auth()->user()->phone;
        return view('User/Property/create', compact('userName', 'userEmail', 'userPhone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $user = auth()->user()->id;
        $userName = auth()->user()->name;
        $userEmail = auth()->user()->email;
        $userPhone = auth()->user()->phone;


        if ($request->method() == 'POST') {
            $requestObj = app(PropertyRequest::class);

            $validatedData = $requestObj->validated();


            $validatedData['amenities'] = $requestObj->input('amenities');


            $imageName = '';
            if ($request->hasFile('cover_image')) {
                $imageName = uniqid() . '.' . request()->cover_image->getClientOriginalExtension();
                request()->cover_image->move(public_path('uploads/cover_images'), $imageName);
            }

            $validatedData['cover_image'] = $imageName;

            $validatedData['user_id'] = $user;

            $new_property = Property::create($validatedData);

            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = $validatedData['property_title'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('uploads/property_images'), $imageName);
                    Image::create([
                        'property_id' => $new_property->id,
                        'image' => $imageName
                    ]);
                }
            }

            return redirect()->route('user.property.create')
                ->with(array('success' => 'Property added successfully.'));
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
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

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $properties = Property::where('city', 'like', "%$query%")
            ->orWhere('address', 'like', "%$query%")
            ->orWhere('property_category', 'like', "%$query%")->paginate(6);
        return view('User/Property/search-results', compact('properties'));
    }

    public function catelog()
    {
        return view('Frontend/property');
    }
}
