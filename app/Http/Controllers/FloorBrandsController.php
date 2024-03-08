<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Floor;
use App\Models\FloorBrand;
use App\Models\ServicePackageItem;
use Illuminate\Http\Request;

class FloorBrandsController extends Controller
{
    //
    public function index(Floor $floor)
    {
        return view('admin.floor_brands.index', compact('floor'));
    }

    public function create(Floor $floor)
    {
        $brands = Brand::all();
        return view('admin.floor_brands.create', compact('floor', 'brands'));
    }

    public function store(Floor $floor)
    {
        $items = request('brand_id');
        foreach ($items as $item) {
            $floor_brand['brand_id'] = $item;
            $floor_brand['floor_id'] = $floor->id;
            FloorBrand::create($floor_brand);
        }
        return back()->with('message', 'Floor brands added successfully');

    }

    public function edit(FloorBrand $floorBrand)
    {
        return view('admin.floor_brands.edit', compact('floorBrand'));
    }

    public function update(FloorBrand $floorBrand)
    {
        $update = request()->validate([
            'specifications' => ['required'],
        ]);

        if (request()->hasfile('specification_image')) {
            //get the file field data and name field from form submission
            $file_specification = request()->file('specification_image');

            //get file original name
            $name_specification = $file_specification->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name_specification = time() . $name_specification;

            //upload the file to a directory in Public folder
            $image_specification = $file_specification->move('images/specifications', $file_name_specification);
            $update['specification_image'] = $image_specification;

        }


        $floorBrand->update($update);

        return back()->with('message', 'Floor brand updated successfully');
    }
}
