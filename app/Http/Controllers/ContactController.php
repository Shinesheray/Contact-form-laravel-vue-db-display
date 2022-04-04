<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contact::orderBy('gender', 'DESC')->get();
    }


    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $newContact = new Contact;
        $newContact->name = $request->contact["name"];
        $newContact->email = $request->contact["email"];
        $newContact->gender = $request->contact["gender"];
        $newContact->content = $request->contact["content"];
        $newContact->save();

        // you can add your own email address here to recieve the detail once a form is filled in
        //  Mail::send('', $data, function($message) use ($data) {
        //   $message->to($data['email'])
        //   ->subject($data['subject']);
        // });

        // return back()->with(['message' => 'Email successfully sent!']);
        return $newContact;

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingContact = Contact::find($id);
        
        if($existingContact){
            $existingContact->delete();
            return "Contact successfully deleted!";
        }
        return "Contact not found or does not exist"; 
    }
}
