<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    //
    public function index(){
        $accessories = Accessory::all();
        return view('admin.accessories.index',compact('accessories'));
    }

    public function create(){
        $brands = Brand::all();
        return view('admin.accessories.create',compact('brands'));
    }

    public function store()
    {
        $accessory = request()->validate([
            'brand_id' => ['nullable'],
            'name' => ['required'],
            'price' => ['nullable'],
            'description' => ['nullable'],
        ]);
        //update the accessory
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/accessories', $file_name);
            $accessory['image'] = $image;

        }

        Accessory::create($accessory);

        return back()->with('message','Accessory added successfully.');
    }

    public function show(Accessory $accessory)
    {
        return view('admin.accessories.show', compact('accessory'));

    }

    public function edit(Accessory $accessory)
    {
        $brands = Brand::all();
        return view('admin.accessories.edit', compact('accessory','brands'));

    }

    public function update(Accessory $accessory)
    {
        $image = '';
        $update = request()->validate([
            'brand_id' => ['nullable'],
            'name' => ['required'],
            'price' => ['nullable'],
            'description' => ['nullable'],
        ]);

        //update the accessory
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/accessories', $file_name);

            $old_path = $accessory->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $accessory->update($update);

        return redirect('/admin/accessories')->with('message', 'Accessory updated successfully.');


    }

    public function destroy(Accessory $accessory)
    {
        //
        $accessory->delete();
        return redirect('/admin/accessories')->with('message', 'Accessory deleted successfully.');

    }
}
