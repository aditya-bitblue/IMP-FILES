<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
use Session;
// use Symfony\Component\HttpFoundation\Session\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function registration()
    {
        return view('admin.auth.registration');
    }

    public function registerUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            '_token' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:12',
        ]);
        $data = new  User();
        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->remember_token = $req['_token'];
        $data->password = Hash::make($req['password']);
        $data = $data->save();
        if ($data) {
            return back()->with('success', 'You have registerd Successfuly');
        } else {
            return back()->with('fail', 'Something Went wrong');
        }
    }


    public function loginUser(Request $req)
    {

        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);
        $user = User::where('email', '=', $req->email)->first();
        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
}
