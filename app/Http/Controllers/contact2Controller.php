<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contact2Controller extends Controller
{
    //
    public function getContact(){

        $contacts = Contact::get()->toArray();

        return response()->json(["status"=>200, 'contacts'=>$contacts]);
        
    }
    public function index(Request $request){

        $result = Contact::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        if ($result) {
            return response()->json(["status" => 200]);
        }else{
            return response()->json("Contact Not Added");
        }
    }
}
