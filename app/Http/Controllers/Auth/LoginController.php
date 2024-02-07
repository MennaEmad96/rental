<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//custom error message for inactive user
use Illuminate\Validation\ValidationException;
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
        //login using userName
        return ['userName'=>$request->email, 'password'=>$request->password, 'active'=>1];
        //login using email or userName
        // if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
        //     return ['email'=>$request->email, 'password'=>$request->password, 'active'=>1];
        // }else{
        //     return ['userName'=>$request->email, 'password'=>$request->password, 'active'=>1];
        // }
    }
    
    protected function sendFailedLoginResponse(Request $request)
    {
        // return dd($this->username());
        //result: "email"
        //if user is active, this code won't be executed
        $ifActive = DB::table('users')->select('active')->where('userName', $request->email)->first();
        // result: $ifActive->active
        //if user is not active, return with customized message
        if($ifActive->active == 0){
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.active')],
            ]);
        }else{
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
            ]);
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        //after logout redirect to login
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('admin/login');
    }
}
