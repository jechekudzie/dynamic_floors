<?php

namespace App\Http\Controllers;

use App\Models\WallDecor;
use Illuminate\Http\Request;

class WallDecorController extends Controller
{
    //
    public function index()
    {
        $wallDecors = WallDecor::all();
        return view('admin.wall_decors.index', compact('wallDecors'));
    }

    public function create()
    {
        return view('admin.wall_decors.create');
    }



    public function store(Request $request)
    {
        $wallDecor =  $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        //update the floor
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/wall_decor', $file_name);
            $wallDecor['image'] = $image;

        }

       WallDecor::create($wallDecor);

        return redirect('admin/wall_decor')->with('success', 'Wall Decor added successfully.');
    }

    public function show(WallDecor $wallDecor)
    {
        return view('admin.wall_decors.show', compact('wallDecor'));
    }

    public function edit(WallDecor $wallDecor)
    {
        return view('admin.wall_decors.edit', compact('wallDecor'));
    }

    public function update(Request $request, WallDecor $wallDecor)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        //update the floor
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/wall_decor', $file_name);
            $validated['image'] = $image;

        }

        $wallDecor->update($validated);

        return redirect('admin/wall_decor')->with('success', 'Wall Decor updated successfully.');
    }

    public function destroy(WallDecor $wallDecor)
    {
        $wallDecor->delete();
        return redirect('admin/wall_decor')->with('success', 'Wall Decor deleted successfully.');
    }


}
