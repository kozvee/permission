<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        $userPermissions = \App\User::findOrFail(1)->role->permissions;

        foreach($userPermissions as $up) {
            echo $up->name . '<br>';
        }

        return 'All';

        return view('home');
    }
}
