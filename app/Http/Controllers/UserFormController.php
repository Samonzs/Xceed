<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserFormController extends Controller
{
    
    public function getData(Request $request)
    {
        // Validate and store the blog post...

        $validator = $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
                'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
            ],
            'password' => [
                'required',
                'string',
                'min:8',             // must be at least 10 characters in length
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character  
            ],
            'fname' => 'required|regex:/^([^0-9]*)$/|min:3'
            

           
        ], ['password.regex' => 'The password must contain a capital letter, number, and symbol ']);

        return $validator($messages);

    }
}








?>