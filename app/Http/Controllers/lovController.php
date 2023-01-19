<?php

namespace App\Http\Controllers;
use App\Models\lov;
use Illuminate\Http\Request;

class lovController extends Controller
{
    
    public function index()
    {
        $VariationDetails = lov::all();
        return view ('VariationDetails.index')->with('VariationDetails', $VariationDetails);
    }



    public function show($id)
    {
        $VariationDetails = lov::find($id);
        return view('VariationDetails.show')->with('VariationDetails', $VariationDetails);
    }


    public function edit($id)
    {
        $VariationDetails = lov::find($id);
        return view('VariationDetails.edit')->with('VariationDetails', $VariationDetails);
    }


    public function update(Request $request, $id)
    {
        $lov=lov::find($id);
        $input=$request->all();
        $lov->update($input);
        return redirect('lov')->with('flash_message', 'Variation Details Updated');
    }


    public function destroy($id)
    {
        lov::destroy($id);
        return redirect('VariationDetails.index')->with('flash_message', 'Variation Deleted!');
    }
}
