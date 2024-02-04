<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

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
    // protected $redirectTo = '/home';
    protected $redirectTo = '/admin/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function credentials(Request $request){
        // $sql = "SELECT `active` FROM `users` WHERE `userName` = ?";
        // $ifActive = DB::select($sql, [$request->email]);
        // result: $ifActive[0]->active
        $ifActive = DB::table('users')->select('active')->where('userName', $request->email)->first();
        // result: $ifActive->active

        //login using userName
        return ['userName'=>$request->email, 'password'=>$request->password, 'active'=>1];
        //login using email or userName
        // if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
        //     return ['email'=>$request->email, 'password'=>$request->password, 'active'=>1];
        // }else{
        //     return ['userName'=>$request->email, 'password'=>$request->password, 'active'=>1];
        // }
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            Auth::logout(); // Logout the user
            return redirect()->back()->with('error', 'Your account is not active.');
        }

        return redirect()->intended($this->redirectPath());
    }
}
