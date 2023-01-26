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
        // $request->validate([
        //     'firstname' => 'required|regex:/^([^0-9]+)$/|max:25|min:1',
        //     'lastname' => 'required|regex:/^([^0-9]+)$/|max:25|min:1',
        //     'clientemail' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
        //     ],
        //     'companyName' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        //     'phonenumber' => 'required|regex:/^[0-9]+$/|max:10|min:10',
        //     'date' => 'required|regex:/^\d{4}\/\d{2}\/\d{2}$/',
        //     'abn' => 'required|regex:/^[0-9]+$/|max:11|min:1',
        //     'addressline' => 'required|string|max:255|min:1',
        //     'suburb' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        //     'postcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',
        //     'jobreferencenumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        //     'ordernumber' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        //     'sitename' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        //     'siteaddressline' => 'required|string|max:255|min:1',   
        //     'siteaddressstate' => 'required|regex:/^([^0-9]+)$/|max:255|min:1',
        //     'sitepostcode' => 'required|regex:/^[0-9]+$/|max:4|min:4',
        //     'totalCost' => 'required|regex:/^[0-9]+$/|max:10|min:1',
        //     'variationDateRequest' => 'required|regex:/^\d{4}\/\d{2}\/\d{2}$/' ]);

        $lov=lov::find($id);
        $input=$request->all();
        $lov->update($input);
        return redirect('lov')->with('flash_message', 'Variation Details Updated');
    }


    public function destroy($id)
    {
        lov::destroy($id);
        return redirect('lov')->with('flash_message', 'Variation Deleted!');
    }

    public function store($id)
    {
    $lov=lov::find($id);
    $lov-> approveStatus="1"; 
    $lov->save();
    return redirect()->back();
    }
}
