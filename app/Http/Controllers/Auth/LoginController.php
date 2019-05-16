<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    //protected $redirectTo = '/back-end';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

   protected function authenticated($request, $user){
     

     if (Auth::user()->status == 0) {

            $message = 'Some message about status';

            // Log the user out.
            $this->logout($request);
             session(['login' => '1']);
            // Return them to the log in form.
            return redirect()->back()
                ->withInput($request->only($this->username(), 'remember'))
                ->withErrors([
                    // This is where we are providing the error message.
                    $this->username() => $message,
                ]);
        }

        if(Auth::user()->role_id == 1){

            return redirect('/back-end');
        } 

        if(Auth::user()->role_id == 2 && Auth::user()->status == 1 ){

            return redirect('/back-end');
        }

         if(Auth::user()->role_id == 3 && Auth::user()->status == 1){

            return redirect('/');
        }

    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
