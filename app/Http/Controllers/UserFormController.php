<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserFormController extends Controller
{
    
    public function getData(Request $request)
    {
        // Validate and store the blog post...

        $request->validate([
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
                'min:6',
                'confirmed'
            ]
            ,

        ]);

        return $request->input();

    }
}








?>