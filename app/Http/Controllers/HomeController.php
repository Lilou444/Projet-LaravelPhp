<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Auth::user()->posts;
        dump($posts);

        return view('home', [
            'posts' => $posts,
            'coucou' => ['salut', 'hey'],
        ]);




    }

    public function IsRole(Request $request)
    {

        $posts = Auth::user()->posts;
        dump($posts);
        if (Auth::user()->hasRole('compagny')) {
               return view('home');
           }
           else {
               return view('welcome');
           }
    }


}
