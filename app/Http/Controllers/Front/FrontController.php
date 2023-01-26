<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Job;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    private $realisation_path = 'uploads/Admin/Realisations';
    private $user_path        = 'uploads/Admin/Users';

    public function index(){
        $jobs = Job::all();
        return view('front.index',compact('jobs'));
    }

    public function jobs($slug){
        $job = Job::where('slug','=',$slug)->get()->first();
        $artisans = $job->users;
        return view('front.artisans',compact('artisans'));
    }

    public function inscription(){
        $cities = City::all();
        $jobs   = Job::all();
        return view('front.inscription',compact('cities','jobs'));
    }

    public function signup(Request $request){
        $this->validate($request,[
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:users',
            'password'       => 'required|string|min:8|confirmed',
            'image'          => 'image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',
            'phone'          => 'required',
            'city_id'        => 'required',
            'job_id'         => 'required',
        ]);

        $user                     = new User();
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

        if ($request->hasFile("image")) {
            $request->file("image")->move($this->user_path,time().$request->file("image")->getClientOriginalName());
            $user->image = time() . $request->file("image")->getClientOriginalName();
        }
        $user->save();
        return redirect()->to(route('front.index'))->with('success','Ajout effectué avec succès');
    }

    public function login(Request $request){
        if ($request->isMethod('post') ){
            $request->validate([
                'email'    => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                if (Auth::user()->type == "Artisan"){
                    return redirect()->to(route('front.account'))->with('success','Vous êtes connecté avec succès');
                }
                if (Auth::user()->type == "Admin"){
                    return redirect()->to(route('users.index'))->with('success','Vous êtes connecté avec succès');
                }
            }
            return redirect(route("front.login"))->with('error',"Oops! Vous avez entré des informations d'identification invalides");

        }
        return view('front.login');
    }

    public function account(){
        $cities = City::all();
        $jobs   = Job::all();
        return view('front.account',compact('cities','jobs'));
    }
    public function profile(Request $request){
        $this->validate($request,[
            'name'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:users,email,'.Auth::user()->id,
            'password'       => 'required|string|min:8|confirmed',
            'image'          => 'image|mimes:jpg,png,jpeg,svg|max:512|dimensions:min_width=100,min_height=100,max_width=512,max_height=512',
            'phone'          => 'required',
            'city_id'        => 'required',
            'job_id'         => 'required'
        ]);

        $user                     = User::findOrFail(Auth::user()->id);
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

        if ($request->hasFile("image")) {
            $request->file("image")->move($this->user_path,time().$request->file("image")->getClientOriginalName());
            $user->image = time() . $request->file("image")->getClientOriginalName();
        }
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

    public function review(Request $request){
        $this->validate($request,[
            'comment' => 'required|string|max:200',
            'stars'   => 'required'
        ]);

        $review = new Review();
        $review->content    = $request->comment;
        $review->stars      = $request->stars;
        $review->user_id    = $request->user_id;
        $review->author_id  = Auth::user()->id;
        $review->save();

        return redirect()->back()->with('success','Modification effectué avec succès');
    }
}
