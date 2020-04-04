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
        return view('home');
    }

    public function showRoles()
    {
        return auth()->user()->roles;
    }

    public function showPermissions()
    {
        echo 'U can do following: ' . '<br>';

        foreach(auth()->user()->roles->first()->permissions as $permission) {
            echo $permission->name . ' ' . '<br>';
        }
    }

    public function checkRole()
    {
        if (auth()->user()->hasRole('admin')) {
            return 'U can Go!';
        } else {
            return 'Sry U cannot';
        }
    }
}
