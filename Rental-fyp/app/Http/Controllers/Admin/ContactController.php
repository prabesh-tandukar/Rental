<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->paginate(10);
        return view('admin.ContactUs.index', compact('contact'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
