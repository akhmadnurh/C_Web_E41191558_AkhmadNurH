<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
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

    public function login(Request $request){
        $this->validate($request, [
            "username" => "required|string", //Validasi kolom username / username
            "password" => "required|string|min:6"
        ]);

        // Pengecekan input termasuk username atau email
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? "email" : "username";
        $login = [
            $loginType => $request->username,
            "password" => $request->password
        ];

        // Lakukan login
        if(auth()->attempt($login)) {
            // Jika berhasil, redirect ke halaman home
            return redirect()->route("home");
        }else{
            // Jika salah, kembali ke login page dan tampilkan pesan error
            return redirect()->route("login")->with(["error" => "Email/Password salah!"]);
        }

    }
}
