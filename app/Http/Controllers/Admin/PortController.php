<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index(){
        $ports = Port::all();
        $countries = Country::all();
        return view('admin.ports.index', compact('ports', 'countries'));
    }

    public function savePort(Request $request){

        $this->validate($request, array(
            'name' => 'required|max:255|unique:ports|min:5',
            'country_id' => 'required',
            'slug' => 'required|unique:ports',
        ));

        $port = new Port();
        $port->name = $request->input('name');
        $port->country_id = $request->input('country_id');
        $port->slug = $request->input('slug');
        $port->save();
        return redirect('/ports')->with('status', 'Port Added Successfully');
    }

    public function editPort($slug){
        $port = Port::where('slug', $slug)->first();
        $countries = Country::all();
        return view('admin.ports.edit', compact('port', 'countries'));
    }

    public function updatePort($slug, Request $request){
        $this->validate($request, array(
            'name' => 'required|max:255|unique:ports|min:5',
            'country_id' => 'required',
            'slug' => 'required',
        ));
        $port = Port::where('slug', $slug)->first();
        $port->name = $request->input('name');
        $port->country_id = $request->input('country_id');
        $port->slug = $request->input('slug');
        $port->update();
        return redirect('/ports')->with('status', 'Port Updated Successfully');
    }

    public function deletePort($slug){
        $port = Port::where('slug', $slug)->first();
        $port->delete();
        return redirect('/ports')->with('warning', 'Port Deleted Successfully');
    }
}
