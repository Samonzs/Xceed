<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insertFields_DB extends Controller
{
    //

    function register(Request $request){
/*
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
            'password.regex' => 'The password must contain a capital letter, number, and symbol ']);
*/

            
        $query = DB::table('users')->insert([

            'staff_fname'=>$request->input('staff_fname'),
            'staff_lname'=>$request->input('staff_lname'),
            'staff_email'=>$request->input('staff_email'),
            'password'=>$request->input('password')

        ]);

        if($query)
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
