<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function create(Request $request)
    {
        $about = new About();
        $request->validate([
            'description' => 'required',
            'image' => 'required|max:1024'
        ]);
        $about->description = $request->description;
        $about->image = $request->image;
        $about->save();
        return response()->json($about);
    }


    public function get()
    {
        $about = About::all();
        return response()->json($about);
    }


    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->about_description = $request->about_description;
        $about->about_image = $request->about_image;
        $about->save();
        return response()->json($about);
    }


    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return response()->json($about);
    }
}
