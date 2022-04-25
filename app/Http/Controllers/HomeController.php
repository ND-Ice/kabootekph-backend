<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function create(Request $request)
    {

        $home = new Home();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|max:1024'
        ]);

        $home->title = $request->title;
        $home->description = $request->description;
        $home->image = $request->image;
        $home->save();
        return response()->json($home);
    }


    public function get()
    {
        $home = Home::all();
        return response()->json($home);
    }


    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id);
        $home->title = $request->title;
        $home->description = $request->description;
        $home->image = $request->image;
        $home->save();
        return response()->json($home);
    }


    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();
        return response()->json($home);
    }
}
