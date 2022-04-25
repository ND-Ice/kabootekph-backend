<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function create(Request $request)
    {
        $address = new Address();
        $request->validate([
            'address' => 'required',
        ]);
        $address->address = $request->address;
        $address->save();
        return response()->json($address);
    }


    public function get()
    {
        $address = Address::all();
        return response()->json($address);
    }


    public function update(Request $request, $id)
    {
        $address = Address::findOrFail($id);
        $address->address = $request->address;
        $address->save();
        return response()->json($address);
    }


    public function destroy($id)
    {
        $address = Address::find($id);
        $address->delete();
        return response()->json($address);
    }
}
