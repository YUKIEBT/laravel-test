<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first-name','family-name', 'gender', 'email', '1st-tel','2nd-tel','3rd-tel', 'address', 'building', 'category', 'content']);
        return view('confirm', ['contact' => $contact]);
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first-name','family-name', 'gender', 'email', '1st-tel','2nd-tel','3rd-tel', 'address', 'building', 'category', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
