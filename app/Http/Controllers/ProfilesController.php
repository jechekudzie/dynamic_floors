<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Material;
use App\Models\Profile;
use App\Models\ProfileType;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index(){
        $profiles = Profile::all();
        return view('admin.profiles.index',compact('profiles'));
    }

    public function create(){
        $colors = Color::all();
        $profile_types = ProfileType::all();
        $materials = Material::all();
        $suppliers = Supplier::all();
        return view('admin.profiles.create',compact('suppliers',
            'materials','colors','profile_types'));
    }

    public function store()
    {
        $profile = request()->validate([
            'profile_type_id' => ['nullable'],
            'supplier_id' => ['nullable'],
            'material_id' => ['nullable'],
            'color_id' => ['nullable'],
            'price' => ['nullable'],
            'description' => ['nullable'],
        ]);
        //update the profile
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/profiles', $file_name);
            $profile['image'] = $image;

        }

        Profile::create($profile);

        return back()->with('message','Profile added successfully.');
    }

    public function show(Profile $profile)
    {
        return view('admin.profiles.show', compact('profile'));

    }

    public function edit(Profile $profile)
    {
        $profile_types = ProfileType::all();
        $colors = Color::all();
        $materials = Material::all();
        $suppliers = Supplier::all();
        return view('admin.profiles.edit', compact('profile',
            'materials','suppliers','colors','profile_types'));

    }

    public function update(Profile $profile)
    {

        $update = request()->validate([
            'profile_type_id' => ['nullable'],
            'supplier_id' => ['nullable'],
            'material_id' => ['nullable'],
            'color_id' => ['nullable'],
        ]);

        //update the profile
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/profiles', $file_name);

            /*$old_path = $profile->image;
            if ($old_path != null) {
                unlink($old_path);
            }*/
            $update['image'] = $image;

        }

        $profile->update($update);

        return redirect('/admin/profiles')->with('message', 'Profile updated successfully.');


    }

    public function destroy(Profile $profile)
    {
        //
        $profile->delete();
        return redirect('/admin/profiles')->with('message', 'Profile deleted successfully.');

    }
}
