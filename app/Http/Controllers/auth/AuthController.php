<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetRequest;
use App\Http\Requests\ResetRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function processLogin(Request $request){
        $credentials=$request->validate([
            'login' => 'required|string',
            'password'=>'required'
        ]);
        // Xác định trường đăng nhập (email hoặc username)
        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $userExists = User::where($loginField, $request->login)->exists();
        if (!$userExists) {
            return back()->withErrors([
                'login' => 'Tài khoản chưa được đăng kí.',
            ]);
        }
        // Cố gắng đăng nhập
        if (Auth::attempt([$loginField => $credentials['login'], 'password' => $credentials['password']], $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended();
        }
        return back()->withErrors(['success'=>'Thông tin đăng nhập không chính xác']);
    }
    public function processRegister(Request $request){
        if ($request->isMethod('post')) {
            // Validate the request data
            $request->validate([
                'username' => 'required|string|max:255|unique:users,username',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation'=>'required|string'
            ],[
                'username.required'=>"Vui lòng nhập username",
                'email.required'=>"Vui lòng nhập email",
                'password.required'=>"Vui lòng nhập password",
                'password.confirmed'=>"Mật khẩu và nhập lại mật khẩu không khớp",
                'password_confirmation.required'=>"Vui lòng không bỏ trống",
                'username.unique'=> 'UserName đã được đăng kí',
                'email.unique'=>'Email đã được đăng kí'
            ]);

            // If validation fails, return back with errors
            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInput();
            // }

            // Create new user
             User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('register')->with('success', 'Đăng kí thành công');
        }

    }

    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function forget(){
        return view('forget');
    }
    public function processForget(ForgetRequest $request){
        $request->validate([
            'email'=>'required|exists:users,email'
        ],[
             'email.required'=>"Vui lòng nhập email ",
            'email.exists'=>"Email này chưa được đăng kí"
        ]);
        $token=strtoupper(Str::random(10));
        $user=User::where('email',$request->email)->first();
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>now()
        ]);
        Mail::send('auth.directForm',compact('token','user'),function($message) use ($user){
            $message->to($user->email,$user->name);
            $message->subject('Đặt lại mật khẩu');
            // return back()->with('message','Gửi về thành công');
        });
        return back()->with('message','Gửi về thành công');
    }
    public function resetPass($token,$id){
        return view('auth.reset',['token'=>$token,'id_user'=>$id]);
    }
    public function viewPass(){
        return view('auth.reset');
    }
    public function processPass(ResetRequest $resetRequest){
        $email=User::where('id',$resetRequest->id_user)->first()->email;
        $passwordReset=DB::table('password_resets')->where('token',$resetRequest->token)->where('email',$email)->first();
        if($passwordReset){
            $user = User::where('email', $email)->first();
            $user->password = Hash::make($resetRequest->password);
            $user->save();
            return back()->with("success","Thay đổi thành công");
        }
        return back()->with("success","Thay đổi thất bại");
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
