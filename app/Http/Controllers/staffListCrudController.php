<?php

namespace App\Http\Controllers;
use App\Models\staffListCrud;
use Illuminate\Http\Request;

class staffListCrudController extends Controller
{
    
    public function index()
    {
        $users = staffListCrud::all();
        return view ('users.index')->with('users', $users);
    }


    public function show($id)
    {
        $users = staffListCrud::find($id);
        return view('users.show')->with('users', $users);
    }

   
    public function edit($id)
    {
        $users = staffListCrud::find($id);
        return view('users.edit')->with('users', $users);
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'staff_fname' => 'required|regex:/^([^0-9]*)$/|min:3',
            'staff_lname' => 'required|regex:/^([^0-9]*)$/|min:3',
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
            'password.regex' => 'The password must contain a capital letter, number, and symbol ']);


        $stafListCrud=staffListCrud::find($id);
        $input=$request->all();
        $stafListCrud->update($input);
        return redirect('staffListCrud')->with('flash_message', 'staff updated');
    }

    public function destroy($id)
    {
        staffListCrud::destroy($id);
        return redirect('users')->with('flash_message', 'User Deleted!');
    }
}
