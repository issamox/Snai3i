<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    public function index(){
        $services = Service::paginate(12);
        return view('admin.services.index',compact('services'));
    }

    public function create(){
        $service = new Service();
        return view('admin.services.create',compact('service'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'           => 'unique:services|required',
        ]);

        $service        = new Service();
        $service->name  = $request->name;
        $service->slug  = Str::slug( $request->name );
        $service->save();

        return redirect()->to(route('services.index'))->with('success','Ajout effectué avec succès');

    }

    public function edit(Service $service){
        return view('admin.services.edit',compact('service'));
    }

    public function update(Service $service,Request $request){

        $this->validate($request,[
            'name'           => 'required|unique:services,name,'.$service->id,
        ]);

        $service->name  = $request->name;
        $service->slug  = Str::slug( $request->name );
        $service->save();

        return redirect()->to(route('services.index'))->with('success','Modification effectué avec succès');
    }

    public function destroy (Service $service){

        $service->delete();
        return response()->json(['success' => 'Suppression effectué avec succès']);

    }
}
