<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transformers\UserTransformer;

class HomeController extends Controller
{   
    /**
     * create a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param UserTransformer $userTransformer
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(UserTransformer $userTransformer)
    {
        $user = $userTransformer->transform(Auth::user());

        return view('home', compact('user'));
    }
}
