<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UserFormController extends Controller
{
    
    public function getData(Request $request)
    {
        // Validate for staff (user) login.

        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
            ],
            'password' => [
                'required',
                'string',
                'min:8',              // must be at least 10 characters in length
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character  
            ],



           
        ], ['password.regex' => 'The password must contain a capital letter, number, and symbol ']);

        return $request->validate;
      

    }

    public function getClientData(Request $request)
    {
        //client details in variation page

        $request->validate([

        'firstname' => 'required|regex:/^([^0-9])$/|max:25|min:1',
        'lastname' => 'required|regex:/^([^0-9])$/|max:25|min:1',
        'clientemail' => 'required', 'string','email','max:255', 'regex:/^\w+[-.\w]@(?!(?:outlook|myemail|yahoo).com$)\w+[-.\w]?.\w{2,4}$/|min:1',
        'compName' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'phonenumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'abn' => 'required|regex:/^[0-9]+$/|max:11|min:1',
        'addressline' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'suburb' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'postcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',
        'jobreferencenumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'ordernumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'sitename' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'siteaddressline' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'siteaddressstate' => 'required|regex:/^([^0-9])$/|max:255|min:1',
        'sitepostcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',

        ]);

        return $request->validate;

    }

    public function getStaffData(Request $request)
    {

        //validation for staff creation page

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

        return $request->validate;

    }
   
}








?>