<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\request;


class LoginController extends Controller
{
    
    

    use AuthenticatesUsers;


   /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';
 
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
        
    }

    
    protected function authenticated($request, $user)
    {
        if($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');

        }
        else
         
        if ($user->role === 'employe') {
            return redirect()->intended('/employe/dashboard');
        }
        else
         
        if ($user->role === 'client') {
            return redirect()->intended('/');
        }
        else

        return redirect()->intended('/');
    }

}
