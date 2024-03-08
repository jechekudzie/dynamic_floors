<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    //
    public function index(){
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store()
    {
        $service = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);
        //update the service
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/services', $file_name);
            $service['image'] = $image;

        }

        Service::create($service);

        return back()->with('message','Service added successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));

    }

    public function edit(Service $service)
    {

        return view('admin.services.edit', compact('service'));

    }

    public function update(Service $service)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        //update the service
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/services', $file_name);

            $old_path = $service->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $service->update($update);

        return redirect('/admin/services')->with('message', 'Service updated successfully.');


    }

    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect('/admin/services')->with('message', 'Service deleted successfully.');

    }
}
