<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function saveCountry(Request $request){

        $this->validate($request, array(
            'name' => 'required|max:255|unique:countries|min:5',
            'slug' => 'required|unique:countries',
        ));

        $country = new Country();
        $country->name = $request->input('name');
        $country->slug = $request->input('slug');
        $country->save();
        return redirect('/countries')->with('status', 'Country Added Successfully');
    }

    public function editCountry($slug){
        $country = Country::where('slug', $slug)->first();
        return view('admin.countries.edit', compact('country'));
    }

    public function updateCountry($slug, Request $request){
        $this->validate($request, array(
            'name' => 'required|max:255|unique:countries|min:5',
            'slug' => 'required',
        ));
        $country = Country::where('slug', $slug)->first();
        $country->name = $request->input('name');
        $country->slug = $request->input('slug');
        $country->update();
        return redirect('/countries')->with('status', 'Country Updated Successfully');
    }

    public function deleteCountry($slug){
        $country = Country::where('slug', $slug)->first();
        $country->delete();
        return redirect('/countries')->with('warning', 'Country Deleted Successfully');
    }
}
