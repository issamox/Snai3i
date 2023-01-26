<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    private $upload_path      = 'uploads/Admin/Users';
    private $realisation_path = 'uploads/Admin/Realisations';

    public function index(){
        $users = User::latest()->paginate(12);
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        $user   = new User();
        $cities = City::all();
        $jobs   = Job::all();
        return view('admin.users.create',compact('user','cities','jobs'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:users',
            'password'       => 'required|string|min:8|confirmed',
            'image'          => 'image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',
            'phone'          => 'required',
            'city_id'        => 'required',
            'job_id'         => 'required',
            'services'       => 'required',
            'services.*'     => 'required',
        ]);

        $user                     = new User();
        $user->name               = $request->name;
        $user->email              = $request->email;
        $user->password           = Hash::make( $request->password );
        $user->password_decrypted =  $request->password;
        $user->description        = $request->description;
        $user->phone              = $request->phone;
        $user->experience         = $request->experience;
        $user->type               = $request->type;
        $user->city_id            = $request->city_id;
        $user->job_id             = $request->job_id;

        if ($request->hasFile("image")) {
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
            $user->image = time() . $request->file("image")->getClientOriginalName();
        }

        $user->save();

        /* Les serives */
        foreach ($request->services as $key => $value) {
            if (isset($request->services[$key])) {
                $user->services()->create(['name' => $request->services[$key], 'slug' => Str::slug( $request->services[$key] )]);
            }
        }

        /* Les realisations */
        if($request->hasfile('realisations'))
        {
            foreach($request->file('realisations') as $key => $file)
            {
                $name = time().$file->getClientOriginalName();
                $file->move($this->realisation_path,$name);
                $user->realisations()->create( ['name' => $name ]);
            }

        }

        return redirect()->to(route('users.index'))->with('success','Ajout effectué avec succès');

    }

    public function edit(User $user){
        $cities = City::all();
        $jobs   = Job::all();
        return view('admin.users.edit',compact('user','cities','jobs'));
    }

    public function update(User $user,Request $request){
        $this->validate($request,[
            'name'           => 'required|string|max:255',
            'image'          => 'image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',
            'email'          => 'required|unique:users,name,'.$user->id,
            'password'       => 'required|string|min:8|confirmed',
            'phone'          => 'required',
            'city_id'        => 'required',
            'job_id'         => 'required',
            'services'       => 'required',
            'services.*'     => 'required',

        ]);

        if ($request->hasFile("image")){
            $request->file("image")->move($this->upload_path,time().$request->file("image")->getClientOriginalName());
            $user->image              = time().$request->file("image")->getClientOriginalName();
        }

        $user->name               = $request->name;
        $user->email              = $request->email;
        $user->password           = Hash::make( $request->password );
        $user->password_decrypted = $request->password;
        $user->description        = $request->description;
        $user->phone              = $request->phone;
        $user->experience         = $request->experience;
        $user->type               = $request->type;
        $user->city_id            = $request->city_id;
        $user->job_id             = $request->job_id;
        $user->save();

        /* Les serives */
        foreach ($request->services as $key => $value) {
            if (isset($request->services[$key])) {
                $user->services()->updateOrCreate(
                    ['id'   => $request->service_id[$key] ?? null],
                    ['name' => $request->services[$key], 'slug' => Str::slug($request->services[$key]) ]
                );
            }
        }

        /* Les realisations */
        if($request->hasfile('realisations'))
        {
            foreach($request->file('realisations') as $key => $file)
            {
                $name = time().$file->getClientOriginalName();
                $file->move($this->realisation_path,$name);
                $user->realisations()->create( ['name' => $name ]);
            }

        }

        return redirect()->back()->with('success','Modification effectué avec succès');

    }

    public function destroy (User $user){

        $user->delete();

       // if (file_exists(public_path($this->upload_path."/$user->image"))){ unlink(public_path($this->upload_path."/$user->image"));}

        if ($user->image != "") {
            try {
                if (file_exists(public_path($this->upload_path . "/$user->image"))) {
                    unlink(public_path($this->upload_path . "/$user->image"));
                }
            } catch (\Exception $exception) {
                return redirect()->back()->with('error', 'Error sur la supprission du image');
            }
        }



        return redirect()->to(route('users.index'))->with('success','Suppression effectué avec succès');
    }
}
