<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    private $upload_path = 'uploads/Admin/Jobs';

    public function index(){
        $jobs = Job::paginate(12);
        return view('admin.jobs.index',compact('jobs'));
    }

    public function create(){
        $job = new Job();
        return view('admin.jobs.create',compact('job'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'           => 'unique:jobs|required',
            'image'          => 'required|image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',

        ]);

        if ($request->hasFile("image")){
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
        }

        $job        = new Job();
        $job->name  = $request->name;
        $job->slug  = Str::slug( $request->name );
        $job->image = time().$request->file("image")->getClientOriginalName();
        $job->save();

        return redirect()->to(route('jobs.index'))->with('success','Ajout effectué avec succès');

    }

    public function edit(Job $job){
        return view('admin.jobs.edit',compact('job'));
    }

    public function update(Job $job,Request $request){

        $this->validate($request,[
            'name'           => 'required|unique:jobs,name,'.$job->id,
            'image'          => 'nullable|image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',

        ]);

        if ($request->hasFile("image")){
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
        }

        $job->name  = $request->name;
        $job->slug  = Str::slug( $request->name );
        if ($request->hasFile("image")) {
            $job->image = time() . $request->file("image")->getClientOriginalName();
        }
        $job->save();

        return redirect()->to(route('jobs.index'))->with('success','Modification effectué avec succès');

    }

    public function destroy (Job $job){

        try {
            $job->delete();
            \File::delete(asset($this->upload_path."/$job->image"));
        }catch (\Exception $ex){
            dd($ex);
        }

        return redirect()->to(route('jobs.index'))->with('success','Supprission effectué avec succès');
    }


}
