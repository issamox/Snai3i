<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CityController extends Controller
{
    private $upload_path = 'uploads/Admin/Cities';

    public function index(){
        $cities = City::paginate(12);
        return view('admin.cities.index',compact('cities'));
    }

    public function create(){
        $city = new City();
        return view('admin.cities.create',compact('city'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'           => 'unique:cities|required',
            'image'          => 'required' // max 10000kb , mimes:jpeg,jpg,png|max:500
        ]);

        if ($request->hasFile("image")){
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
        }

        $city        = new City();
        $city->name  = $request->name;
        $city->slug  = Str::slug( $request->name );
        $city->image = time().$request->file("image")->getClientOriginalName();
        $city->save();

        return redirect()->to(route('cities.index'))->with('success','Ajout effectué avec succès');

    }

    public function edit(City $city){
        return view('admin.cities.edit',compact('city'));
    }

    public function update(City $city,Request $request){

        $this->validate($request,[
            'name'           => 'required|unique:cities,name,'.$city->id,
            'image'          => 'required' // max 10000kb , mimes:jpeg,jpg,png|max:500

        ]);

        if ($request->hasFile("image")){
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
        }

        $city->name  = $request->name;
        $city->slug  = Str::slug( $request->name );
        $city->image = time().$request->file("image")->getClientOriginalName();
        $city->save();

        return redirect()->to(route('cities.index'))->with('success','Modification effectué avec succès');

    }

    public function destroy (City $city){

        $city->delete();

        if (file_exists(public_path($this->upload_path."/$city->image"))){
            unlink(public_path($this->upload_path."/$city->image"));
        }

        return redirect()->to(route('cities.index'))->with('success','Supprission effectué avec succès');
    }
}
