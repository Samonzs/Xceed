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

    
    // public function create()
    // {
    //     //
    // }

    
    // public function store(Request $request)
    // {
    //     //
    // }

   
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
        $users = staffListCrud::find($id);
        $users->staff_fname = $request->input("staff_fname");
        $users->staff_lname = $request->input("staff_lname");
        $users->staff_email = $request->input("staff_email");
        $users->password = $request->input("password");        
        $users->save();
        return redirect('users')->with('flash_message', 'User Details Updated');
    }

    
    public function destroy($id)
    {
        staffListCrud::destroy($id);
        return redirect('users')->with('flash_message', 'User Deleted!');
    }
}
