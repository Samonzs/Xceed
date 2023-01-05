<?php

namespace App\Http\Controllers;
use App\Models\TermsAndConditions;
use Illuminate\Http\Request;

class TaCcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $TaC = TermsAndConditions::all();
        return view('TaC.TaC')->with('TaC', $TaC);



        /*       
        $TaC = TermsAndConditions::all();
                
        return view('TaC.TaC')->with('termsAndConditions', $TaC); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $input = $request->all();
        TermsAndConditions::create($input);
        return redirect()->route('TaC.TaC')->with('success', 'Terms and Conditions saved'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TaC = TermsAndConditions::find($id);        
        return view('TaC.TaCshow')->with('TaC', $TaC);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TaC = TermsAndConditions::find($id);
        return view('TaC.TaCedit')->with('TaC', $TaC);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $TaC = TermsAndConditions::find($id);
        $TaC->TermsAndConditions = $request->input("TermsAndConditions");
        $TaC->save();
        return redirect('TaC')->with('success', 'Contact Updated!');
        

        // Getting values from the blade template form
        
  
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

    }
    

}