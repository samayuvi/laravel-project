<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
       $contact=new Contact();
       $contact->name=$req->input('name');
       $contact->email=$req->input('email');
       $contact->topic=$req->input('topic');
       $contact->message=$req->input('message');

       $contact->save();

       return redirect()->route('home')->with('success','The message was added successfuly');

    }
    
}
