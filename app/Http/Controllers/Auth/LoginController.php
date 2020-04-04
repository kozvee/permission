<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function redirectTo()
    // {
    //     switch(auth()->user()->roles()->first()->slug){
    //         case 'admin':
    //         $this->redirectTo = '/admin/dashboard';
    //         return $this->redirectTo;
    //             break;

    //         case 'sale-marketing':
    //         $this->redirectTo = '/sale-marketing/dashboard';
    //         return $this->redirectTo;
    //             break;

    //         case 'customer-service':
    //         $this->redirectTo = '/customer-service/dashboard';
    //         return $this->redirectTo;
    //             break;
    //     }
    // }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated($user)
    {
        
        if(auth()->user()->roles()->first()) {
            switch(auth()->user()->roles()->first()->slug){
                case 'admin':
                    return redirect(route('admin.dashboard'));
                    break;

                case 'sale-marketing':
                    return redirect(route('sale-marketing.dashboard'));
                    break;

                case 'customer-service':
                    return redirect(route('customer-service.dashboard'));
                    break;

                case 'staff':
                    return redirect(route('staff.dashboard'));
                    break;
            }
        }
    }

}
