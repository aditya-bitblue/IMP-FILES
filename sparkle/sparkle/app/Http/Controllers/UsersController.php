<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Mail;


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
    public function sendOtp(Request $request)
    {
        //
        $emailid = $request->email;
        $otp = rand(10, 1000000);
        // return $emailid;
        // $email = $request->email;
        $data = array('email' => "$emailid", 'otp' => "$otp");
        $values = array($otp, $emailid);


        session()->put('otp', $values);

        $mailSent = Mail::send(['text' => './emails/email'], $data, function ($message) use ($emailid, $otp) {
            $message->to($emailid)->subject('Laravel Basic Testing Mail');
            $message->from('support@sparklekids.com', 'Sparkle kids');
        });

        if (is_null($mailSent) == false) {
            return view("./emails/enterotp", ['email' => $emailid]);
        } else {
            echo "Unknown Error occured";
        }
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
        } else {
            $x = Users::where('email', $request->email)->first();

            if (is_null($x) == 1) { // email is not present
                return back()->with('fail', "User email does not exist, Please Register!");
            } else { // email is present && check password
                if (Hash::check($request->password, $x->password)) {
                    session()->put('admin_email', $request->email);
                    return redirect('dashboard');
                    // return redirect("/dashboard");
                } else {
                    return back()->with('pass-fail', "Password Incorrect !");
                }
            }
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
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
    public function verifyOtp(Request $request)
    {
        $otpreceived = $request->otp;
        $otpgenerated = session()->get('otp')[0];


        if ($otpreceived == $otpgenerated) {
            // session()->forget('otp');  // delete the otp session after verfied.
            // $emailid = session()->get('otp')[1];
            return redirect('/updatepassword');
        } else {
            return view('./emails/sendotp');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, Users $users)
    {
        $request->validate([
            'password' => 'required|min:5|max:12',
            'confirmPassword' => 'required|min:5|max:12'

        ]);
        $input = $request->all();
        $emailid = session()->get('otp')[1];

        session()->forget('otp');
        if ($input['password'] != $input['confirmPassword']) {
            return back()->with('fail', "Passwords must match, Retry !");
        } else {
            $x = Users::where('email', $emailid)->first();
            $x->password = bcrypt($input['password']);
            $x->save();
            return redirect('/login');
        }
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
