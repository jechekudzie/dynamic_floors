<?php

namespace App\Http\Controllers;

use App\Models\FloorBrand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(FloorBrand $floorBrand){
        return view('admin.products.index',compact('floorBrand'));
    }

    public function create(FloorBrand $floorBrand){

        //dd($floorBrand);
        return view('admin.products.create',compact('floorBrand'));
    }

    public function store(FloorBrand $floorBrand)
    {
        $product = request()->validate([
            'name' => ['required'],
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
            $image = $file->move('images/products', $file_name);
            $product['image'] = $image;

        }

        $floorBrand->add_product($product);

        return back()->with('message','Product added successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('service'));

    }

    public function edit(Product $product)
    {

        return view('admin.products.edit', compact('product'));

    }

    public function update(Product $product)
    {
        $image = '';
        $update = request()->validate([
            'name' => ['required'],
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
            $image = $file->move('images/products', $file_name);

            $old_path = $product->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $product->update($update);

        return redirect('/admin/products/'.$product->floor_brand_id.'/index')->with('message', 'Product updated successfully.');


    }

    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('/admin/products')->with('message', 'Product deleted successfully.');

    }
}
