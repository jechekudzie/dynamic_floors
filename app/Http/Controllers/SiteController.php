<?php

namespace App\Http\Controllers;

use App\Models\Cleaner;
use App\Models\CleanerImage;
use App\Models\Floor;
use App\Models\FloorBrand;
use App\Models\Profile;
use App\Models\ProfileType;
use App\Models\Service;
use App\Models\WallDecor;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $floors = Floor::all();
        return view('welcome', compact('floors'));
    }

    public function about()
    {
        $floors = Floor::all();
        return view('about',compact('floors'));
    }

    public function services()
    {
        $services = Service::all();
        return view('services',compact('services'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function floor(Floor $floor)
    {
        return view('floor', compact('floor'));
    }

    public function floor_brands(FloorBrand $floorBrand)
    {
        return view('floor_brands', compact('floorBrand'));
    }

    public function profiles(ProfileType $profileType)
    {
        $profiles = Profile::all();
        return view('profiles', compact('profiles'));
    }

    public function skirting(ProfileType $profileType){
        if($profileType->profiles){
            $skirtings = $profileType->profiles;
        }
        return view('skirting',compact('skirtings'));
    }

    public function cleaners(Cleaner $cleaner){
        $images = CleanerImage::paginate(6);
        $other_cleaners = Cleaner::all();
        return view('cleaners',compact('other_cleaners','cleaner','images'));
    }
    public function wallDecor(){
        $wallDecors = WallDecor::all();
        return view('wall_decor',compact('wallDecors'));
    }

}
