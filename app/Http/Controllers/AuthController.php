<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin() {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;

        // $data = User::where('email',$email)->first();
        // if($data){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return redirect()->route('home');
        //     }
        //     else{
        //         return redirect('login')->with('alert','Email atau Password anda salah!');
        //     }
        // }
        // else{
        //     return redirect('login')->with('alert','Email atau Password anda salah!');
        // }

        if(!Auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->back()->with('pesan','Email atw pasword anda salah');
        }
       
        return redirect()->route('home');
  
    }

    public function showFormRegister()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password)
       ]);

       auth()->loginUsingId($user->id);
       

       return redirect()->route('home');
    }


    public function forgotPassword()
    {
        
        return view('auth.forgot_password');
    }

    public function changePassword(Request $request)
    {
        request()->validate([
            'password' => ['required','string','min:6','confirmed'],
        ]);

        // $currentPassword = auth()->user()->password;
        // $currentPassword = request('password');
        // $old_password = request('old_password');

        // if(Hash::check( $currentPassword )){
        //      user::update([
        //          'password' => bcrypt(request('password')),
        //      ]);
        //     return back()->with('success', 'You are changed your password');
        // }else{
        //     return back()->withErrors(['old_password' => 'make sure you fill curent password']);
        // }

        // if($request->has('password'))

        // $user = User::wherePassword($request->password)->first();

        $user = User::where('active', 0)->first();

        $user_data = [
            'password' => bcrypt($request->password)
        ];
        
        $user->update($user_data);

        return redirect()->route('login')->with('success','Password Berhasil dirubah...!!!');
    }

    public function logout()
    {
        Auth()->logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }

    
}
