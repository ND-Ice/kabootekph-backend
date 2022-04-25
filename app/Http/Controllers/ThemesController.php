<?php

namespace App\Http\Controllers;

use App\Models\Themes;
use Illuminate\Http\Request;


class ThemeController extends Controller
{
    public function create(Request $request)
    {
        $theme = new Themes();
        $request->validate([
            'dark_color' => 'required',
            'light_color' => 'required',
            'accent_color' => 'required',
            'active_color' => 'required',
        ]);
        $theme->dark_color = $request->dark_color;
        $theme->light_color = $request->light_color;
        $theme->accent_color = $request->accent_color;
        $theme->active_color = $request->active_color;
        $theme->save();
        return response()->json($theme);
    }


    public function get()
    {
        $themes = Themes::all();
        return response()->json($themes);
    }


    public function update(Request $request, $id)
    {
        $theme = Themes::findOrFail($id);
        $theme->dark_color = $request->dark_color;
        $theme->light_color = $request->light_color;
        $theme->accent_color = $request->accent_color;
        $theme->active_color = $request->active_color;
        $theme->save();
        return response()->json($theme);
    }


    public function destroy($id)
    {
        $theme = Themes::find($id);
        $theme->delete();
        return response()->json($theme);
    }
}
