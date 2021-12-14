<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('front.index',compact('jobs'));
    }

    public function jobs($slug){
        $job = Job::where('slug','=',$slug)->get()->first();
        $artisans = $job->users;
        return view('front.artisans',compact('artisans'));
    }
}
