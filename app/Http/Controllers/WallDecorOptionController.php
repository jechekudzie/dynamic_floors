<?php

namespace App\Http\Controllers;

use App\Models\WallDecor;
use App\Models\WallDecorOption;
use Illuminate\Http\Request;

class WallDecorOptionController extends Controller
{
    //
    // List options for a specific WallDecor
    public function index(WallDecor $wallDecor)
    {
        $options = $wallDecor->options; // Assuming a relationship is defined in WallDecor model
        return view('admin.wall_decor_options.index', compact('options', 'wallDecor'));
    }

    // Show form to create a new option for a specific WallDecor
    public function create(WallDecor $wallDecor)
    {
        return view('admin.wall_decor_options.create', compact('wallDecor'));
    }

    // Store a new WallDecorOption for a specific WallDecor
    public function store(Request $request, WallDecor $wallDecor)
    {
        $options = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable',
            'sizes'=>'nullable'
        ]);


        // Assuming sizes are submitted as a string like "(2400 x 600mm),(2700 x 600mm)"
        $sizesString = $request->sizes;
        $sizesArray = explode(',', $sizesString); // Convert the string into an array
        $sizesArray = array_map(function($size) {
            return trim($size); // Trim spaces if any
        }, $sizesArray);


        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/wall_decor_options', $file_name);
            $options['image'] = $image;

        }


        $options['sizes'] = $sizesArray;
        $wallDecor->options()->create($options);

        return back()->with('success', 'Wall Decor Option added successfully.');
    }

    // Show form to edit an existing WallDecorOption
    public function edit(WallDecorOption $wallDecorOption)
    {
        return view('admin.wall_decor_options.edit', compact('wallDecorOption'));
    }

    // Update a specific WallDecorOption
    public function update(Request $request, WallDecorOption $wallDecorOption)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'sizes' => 'nullable|json',
        ]);

        $wallDecorOption->update($request->all());

        // Assuming there's a relationship to get back to the parent WallDecor
        return redirect()->route('admin.wall_decor_options.index', $wallDecorOption->wall_decor_id)->with('success', 'Wall Decor Option updated successfully.');
    }
}
