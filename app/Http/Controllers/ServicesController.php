<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Services;
use Illuminate\Http\Request;


class ServiceCrudController extends Controller
{
    public function create(Request $request)
    {
        $service = new Services();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|max:1024'
        ]);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->save();
        return response()->json(['Created Successfully!' => true]);
    }


    public function get()
    {
        $service = Services::all();
        return response()->json($service);
    }


    public function update(Request $request, $id)
    {
        $service = Services::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->save();
        return response()->json(['Updated Successfully!' => true]);
    }

    //////////////////////////////////////////////////////////////////////////////////

    public function destroy($id)
    {
        $service = Services::find($id);
        $service->delete();
        return response()->json(['Message' => 'Deleted Successfully!'], 200);
    }
}
