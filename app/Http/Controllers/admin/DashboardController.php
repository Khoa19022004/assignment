<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
        return view('admin.Dashboard');
    }

    public function login(){
        return view('admin.login');
    }
    public function processLogin(Request $request){
        $credentials=$request->validate([
            'login'=>'required',
            'password'=>'required|min:8'
        ],[
            'login.required'=>"Vui lòng không để trống",
            'password.required'=>"Vui lòng không để trống",
        ]);
        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $userExists = User::where($loginField, $request->login)->exists();
        if (!$userExists) {
            return back()->withErrors([
                'login' => 'Tài khoản chưa được đăng kí.',
            ]);
        }
        if (Auth::attempt([$loginField => $credentials['login'], 'password' => $credentials['password'], 'role'=>'admin'], $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->withErrors(['success'=>'Tài khoản chưa được cấp quyền admin']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
