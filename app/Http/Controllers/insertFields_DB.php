<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class insertFields_DB extends Controller
{
    //

    function getStaffData(Request $request){
    
        $request->validate([
            'staff_fname' => 'required|regex:/^([^0-9]*)$/|min:3',
            'staff_lname' => 'required|regex:/^([^0-9]*)$/|min:3',
            'staff_email' => [
                'required',
                'string',
                'unique:users',
                'email',
                'max:255',
                'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
            ],
            'password' => [
                'required',
                'confirmed', 
                'string',
                'min:8',              // must be at least 10 characters in length
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character  
            ],
           
        ], ['password.regex' => 'The password must contain a capital letter, number, and symbol ']);

      

        $user = User::create([
            'staff_fname' => $request->staff_fname,
            'staff_lname' => $request->staff_lname,
            'staff_email' => $request->staff_email,
            'password' => Hash::make($request->password),
        ]);

        if($user)
        {
            return back()->with('success','Staff user has been successfully created and stored into the db'); //data has been stored in db
        }
        else
        {
            return back()->with('fail', 'Something went wrong'); //error has occured
        }

    }


    //Client Details for 'Create Variation' page 


    



}
