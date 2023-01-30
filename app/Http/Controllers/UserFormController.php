<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Auth;
class UserFormController extends Controller
{
    
    public function checklogin(Request $request)    
    {
        // Validate for staff (user) login.

        $validator = $request->validate([
            'staff_email' => [
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

        

        if (Auth::guard('web')->attempt(['staff_email' => $request->staff_email, 'password' => 
        $request->password], $request->remember))       
        {
            return redirect('user/successlogin');
        }

        else
        {
            return back()->with('error', 'Incorrect email or password');
        }
        

    }
    function index()
    {
     return view('welcome');
    }
    
    function logout()
    {
     Auth::logout();
     return redirect('welcome');
    }

    function successlogin()
    {
     return redirect('lov');
    }
    public function getClientData(Request $request)
    {
        //client details in variation page

    $validator = Validator::make($request->all(),[

        'firstname' => 'required|regex:/^([^0-9]+)$/|max:25|min:1',
        'lastname' => 'required|regex:/^([^0-9]+)$/|max:25|min:1',
        'clientemail' => [
            'required',
            'string',
            'email',
            'max:255',
            'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
        ],
        'companyName' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        'phonenumber' =>[
            'required',
            'regex:/^0(9|4)\d{8}$/'
            ],
        'date' => [
            'required',
            'regex:/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/'
            ],
        'abn' => 'required|regex:/^[0-9]+$/|max:11|min:11',
        'addressline' => 'required|string|max:255|min:1',
        'suburb' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        'postcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',
        'jobreferencenumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'ordernumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'sitename' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        'siteaddressline' => 'required|string|max:255|min:1',   
        'siteaddressstate' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        'sitepostcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',
        'totalCost' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        'variationDateRequest' => [
        'required',
        'regex:/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/'
        ]

        ], ['date.regex' => 'The date must be in the format of yyyy-mm-dd (mm cannot exceed 12, and dd cannot exceed 31)',
        'variationDateRequest.regex'=> 'The date must be in the format of yyyy-mm-dd (mm cannot exceed 12, and dd cannot exceed 31)',
        'abn.regex' => 'The ABN must be 11 numeric digits',
        'phonenumber.regex' => 'The phone number must be 10 numeric digits starting with 04/02',
        'postcode.regex' => 'The postcode must be 4 numeric digits',
        'sitepostcode.regex' => 'The site postcode must be 4 numeric digits',
        'totalCost.regex' => 'Total cost must be numeric'
        ]);

        if ($validator->fails()) 
        {
            return redirect('createquotes')
                        ->withErrors($validator)
                        ->withInput();
        }
        else 
        {
            $query = DB::table('variationdetails')->insert([
            
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'clientemail' => $request->input('clientemail'),
            'companyName' => $request->input('companyName'),
            'phonenumber' => $request->input('phonenumber'),
            'date' => $request->input('date'),
            'abn' => $request->input('abn'),
            'addressline' => $request->input('addressline'),
            'suburb' => $request->input('suburb'),
            'postcode' => $request->input('postcode'),
            'jobreferencenumber' => $request->input('jobreferencenumber'),
            'ordernumber' => $request->input('ordernumber'),
            'sitename' => $request->input('sitename'),
            'siteaddressline' => $request->input('siteaddressline'),
            'siteaddressstate' => $request->input('siteaddressstate'),
            'sitepostcode' => $request->input('sitepostcode'),
            'variationDescription' => $request->input('variationDescription'),
            'totalCost' => $request->input('totalCost'),
            'variationDateRequest' => $request->input('variationDateRequest'),
            'createdBy' => $request->input('createdBy')

           ]); 
            return redirect('confirmation');
        }
    }
    

   

}

?>