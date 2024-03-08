<?php

namespace App\Http\Controllers;

use App\Models\Cleaner;
use App\Models\Brand;
use App\Models\CleanerImage;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CleanersController extends Controller
{
    //
    public function index()
    {
        $cleaners = Cleaner::all();
        return view('admin.cleaners.index', compact('cleaners'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('admin.cleaners.create', compact('brands'));
    }

    public function store()
    {
        $cleaner = request()->validate([
            'name' => ['required'],
            'price' => ['nullable'],
            'description' => ['nullable'],
        ]);
        //update the cleaner
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/cleaners', $file_name);
            $cleaner['image'] = $image;

        }

        Cleaner::create($cleaner);

        return back()->with('message', 'Cleaner added successfully.');
    }

    public function show(Cleaner $cleaner)
    {
        return view('admin.cleaners.show', compact('cleaner'));

    }

    public function edit(Cleaner $cleaner)
    {
        $brands = Brand::all();
        return view('admin.cleaners.edit', compact('cleaner', 'brands'));

    }

    public function update(Cleaner $cleaner)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
            'price' => ['nullable'],
            'description' => ['nullable'],
        ]);

        //update the cleaner
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/cleaners', $file_name);

            $old_path = $cleaner->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $cleaner->update($update);

        return redirect('/admin/cleaners')->with('message', 'Cleaner updated successfully.');


    }

    public function destroy(Cleaner $cleaner)
    {
        //
        $cleaner->delete();
        return redirect('/admin/cleaners')->with('message', 'Cleaner deleted successfully.');

    }


    public function upload_cleaner_images()
    {
        return view('admin.cleaners.upload_images');

    }


    public function store_cleaner_images()
    {
        $cleaner = request()->validate([
            'name' => 'required'
        ]);
        $image = '';
        //update the cleaner
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $files = request()->file('image');

            foreach ($files as $file) {

                //get file original name
                $name = $file->getClientOriginalName();

                //create a unique file name using the time variable plus the name
                $file_name = time() . $name;

                //upload the file to a directory in Public folder
                $image = $file->move('cleaner_images', $file_name);

                CleanerImage::create([
                    'name' => $cleaner['name'],
                    'image' => $image,
                ]);
            }


        }

        Cleaner::create($cleaner);

        return back()->with('message', 'Cleaner added successfully.');
    }

}
