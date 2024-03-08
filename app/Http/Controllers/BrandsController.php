<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Service;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('admin.brands.index',compact('brands'));
    }

    public function create(){
        return view('admin.brands.create');
    }

    public function store()
    {
        $brand = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);
        //update the brand
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/brands', $file_name);
            $brand['image'] = $image;

        }

        Brand::create($brand);

        return back()->with('message','Brand added successfully.');
    }

    public function show(Brand $brand)
    {
        return view('admin.brands.show', compact('brand'));

    }

    public function edit(Brand $brand)
    {

        return view('admin.brands.edit', compact('brand'));

    }

    public function update(Brand $brand)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        //update the brand
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/brands', $file_name);

            $old_path = $brand->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $brand->update($update);

        return redirect('/admin/brands')->with('message', 'Brand updated successfully.');


    }

    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return redirect('/admin/brands')->with('message', 'Brand deleted successfully.');

    }
}
