<?php

namespace App\Http\Controllers;

use App\Models\Phones;
use Illuminate\Http\Request;


class PhoneController extends Controller
{
    public function create(Request $request)
    {
        $isExist =  Phones::where('phone', $request->phone)->get();
        if (count($isExist) == 1) {
            return response()->json("already exists", 404);
        } else {
            $phone = new Phones();
            $request->validate([
                'phone' => 'required',
            ]);
            $phone->phone = $request->phone;
            $phone->save();
            return response()->json($phone);
        }
    }


    public function get()
    {
        $phones = Phones::all();
        return response()->json($phones);
    }


    public function update(Request $request, $id)
    {
        $phone = Phones::findOrFail($id);
        $phone->phone = $request->phone;
        $phone->save();
        return response()->json($phone);
    }


    public function destroy($id)
    {
        $phone = Phones::find($id);
        $phone->delete();
        return response()->json($phone);
    }
}
