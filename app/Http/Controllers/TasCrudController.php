<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TaC = \App\Models\TermsAndConditions::all();
        return view('TaC.TaC',compact('TaC'))->with('TaC', $TaC);
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
         $input = $request->all();
        TermsAndConditions::create($input);
        return redirect()->route('TaC.TaC')->with('success', 'Terms and Conditions saved'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TermsAndConditions $id)
    {
        return view('TaC.TaCshow', compact('TaC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('TaC.TaCedit', compact('TaC'));

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
        $TaC->update($request->all());
        return redirect('TaC.TaC')->with('success', 'Terms of Conditions Updated');      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
