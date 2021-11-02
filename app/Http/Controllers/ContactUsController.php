<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
class ContactUsController extends Controller
{
    public function index(){
        return view('pages.contact');
    }
    public function store(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'body' => 'required'
        ]);
        ContactForm::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'body' =>$request->body
        ]);
        $name = $request->firstname;
        return redirect()->back()->with('success', 'Thank you '. $name .' Your enquiry has been received.');
    }
}
