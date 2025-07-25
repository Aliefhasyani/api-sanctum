<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{   
    //get all address
    public function index(){
        return [
            'addresses'=>Address::all()
        ];
    }

    //create new address
    public function store(Request $request){
        $data = $request->validate([
            'country' => 'required|string|max:255',
            'region'  => 'required|string|max:255',
            'city'    => 'required|string|max:255',
        ]);

        Address::create($data);
        
        return response()->json(['message' => 'data created']);
    }

    //update an address
    public function update(Request $request,$id){
        $address = Address::findOrFail($id);

        $data = $request->validate([
            'country' => 'required|string|max:255',
            'region'  => 'required|string|max:255',
            'city'    => 'required|string|max:255',
        ]);

        $address->update($data);

        return response()->json([
            'message'=>'data updated',
            'data' => $data]);
    }

    //delete an address
    public function destroy($id){
        $address = Address::findOrFail($id);
        
        $address->delete();

        return response()->json(['message' => 'data deleted']);
    }

     public function show(Request $request,$id){
        $address = Address::find($id);

        if($address){
            return response()->json(['addres' => $address]);
        }else{
            return response()->json(['error' => 'invalid address']);
        }
    }


}
