<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    //

    public function index(){
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index',compact('portfolios'));
    }

    public function create(){
        return view('admin.portfolios.create');
    }

    public function store()
    {
        $portfolio = request()->validate([
            'title' => ['required'],
            'description' => ['nullable'],
        ]);
        //update the portfolio
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/portfolios', $file_name);
            $portfolio['image'] = $image;

        }

        Portfolio::create($portfolio);

        return back()->with('message','Portfolio added successfully.');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));

    }

    public function edit(Portfolio $portfolio)
    {

        return view('admin.portfolios.edit', compact('portfolio'));

    }

    public function update(Portfolio $portfolio)
    {
        $image = '';
        $update = request()->validate([
            'title' => ['required'],
            'description' => ['nullable'],
        ]);

        //update the portfolio
        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('images/portfolios', $file_name);

            $old_path = $portfolio->image;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['image'] = $image;

        }

        $portfolio->update($update);

        return redirect('/admin/portfolios')->with('message', 'Portfolio updated successfully.');


    }

    public function destroy(Portfolio $portfolio)
    {
        //
        $portfolio->delete();
        return redirect('/admin/portfolios')->with('message', 'Portfolio deleted successfully.');

    }
}
