<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    //

    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store()
    {
        $color = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);
        Color::create($color);

        return back()->with('message', 'Color added successfully.');
    }

    public function show(Color $color)
    {
        return view('admin.colors.show', compact('brand'));

    }

    public function edit(Color $color)
    {

        return view('admin.colors.edit', compact('color'));

    }

    public function update(Color $color)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        $color->update($update);

        return redirect('/admin/colors')->with('message', 'Color updated successfully.');


    }

    public function destroy(Color $color)
    {
        //
        $color->delete();
        return redirect('/admin/colors')->with('message', 'Color deleted successfully.');

    }
}
