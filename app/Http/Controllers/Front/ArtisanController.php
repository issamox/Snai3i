<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function show(User $user){
        return view('front.artisan.show',compact('user'));
    }
}
