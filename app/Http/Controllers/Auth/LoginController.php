<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use App\User;

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

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect::route('Main.index')->with('message','Succesfully Logged In!');
        }
        else
            return redirect::back()->message('message','Email Or Password Incorrect!');
    }



    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback()
    {
        $facebook = Socialite::driver('facebook')->user();

        $findUser = User::where('email', $facebook->email)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect::route('Main.index')->with('message','Successfully Logged in');
        }
        else{
            $user = New User;
            $user->name = $facebook->name;
            $user->email = $facebook->email;
            $user->password = bcrypt(123456);
            $user->save();
            Auth::login($user);
            return redirect::route('Main.index')->with('message','Successfully Logged in');
        }
    }

}
