<?php

namespace App\Http\Controllers;

use App\Models\Emails;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    public function create(Request $request)
    {
        $email = new Emails();
        $request->validate([
            'email' => 'required',
        ]);
        $email->email = $request->email;
        $email->save();
        return response()->json($email);
    }


    public function get()
    {
        $email = Emails::all();
        return response()->json($email);
    }


    public function update(Request $request, $id)
    {
        $email = Emails::findOrFail($id);
        $email->email = $request->email;
        $email->save();
        return response()->json($email);
    }


    public function destroy($id)
    {
        $email = Emails::find($id);
        $email->delete();
        return response()->json($email);
    }
}
