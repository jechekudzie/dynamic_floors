<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;

class FloorsController extends Controller
{
    //
    public function index(){
        $floors = Floor::all();
        return view('admin.floors.index',compact('floors'));
    }

    public function create(){
        return view('admin.floors.create');
    }

    public function store()
    {
        $floor = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
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
            $image = $file->move('images/floors', $file_name);
            $floor['image'] = $image;

        }

        Floor::create($floor);

        return back()->with('message','Floor added successfully.');
    }

    public function show(Floor $floor)
    {
        return view('admin.floors.show', compact('floor'));

    }

    public function edit(Floor $floor)
    {

        return view('admin.floors.edit', compact('floor'));

    }

    public function update(Floor $floor)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
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
            $image = $file->move('images/floors', $file_name);

            $old_path = $floor->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $floor->update($update);

        return redirect('/admin/floors')->with('message', 'Floor updated successfully.');


    }

    public function destroy(Floor $floor)
    {
        //
        $floor->delete();
        return redirect('/admin/floors')->with('message', 'Floor deleted successfully.');

    }

}
