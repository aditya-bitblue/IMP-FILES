<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        // $x = Users::where('email', $request->email)->first();

        // if (is_null($x) == 1) { // email is not present
        //     return back()->with('fail', "User email does not exist, Please Register!");
        // } else { // email is present && check password
        //     if (Hash::check($request->password, $x->password)) {
        //         session()->put('admin_email', $request->email);
        //         return redirect('dashboard');
        //         // return redirect("/dashboard");
        //     } else {
        //         return back()->with('pass-fail', "Password Incorrect !");
        //     }

        //     // return redirect("/");
        // }
    }
    public function register(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $x = Users::where('email', $request->email)->first();

        // echo is_null($x);
        if (is_null($x) == 1) { // user does not already exists
            $user = new Users;
            $input = $request->all();
            $user->password = bcrypt($input['password']);
            $user->email = $input['email'];
            $user->save();
            return redirect("/");
        } else { // user exists
            return back()->with('fail', "User email exist, Please Login!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
