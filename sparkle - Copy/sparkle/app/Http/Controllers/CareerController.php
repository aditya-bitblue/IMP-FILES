<?php

namespace App\Http\Controllers;

use App\Models\career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:careers',
            'name' => 'required | min:2 | max:10',
            'fathername' => 'required | min:2 | max:10',
            'phone_number' => 'required | min:10 |numeric',
            'dob' => 'required',
            'gender' => 'required',
            'qualification' => 'required',
            'resume' => 'required',
            'message' => 'required | min:5 | max: 50',
        ]);
        $x = career::where('email', $request->email)->first();

        if (is_null($x) == 1) { // user does not  exists ||| allow to apply :]
            $file = $request->file('resume');

            //Display File Name
            $name = explode(".", $file->getClientOriginalName());
            $randomkey = rand();
            $ext = $name[1];
            $filename = $randomkey . '-' . $name[0] . '.' . $ext;
            echo $filename;

            // save on database
            $candidate = new career;
            $input = $request->all();
            $candidate->name = $input['name'];
            $candidate->fathername = $input['fathername'];
            $candidate->email = $input['email'];
            $candidate->phone_number = $input['phone_number'];
            $candidate->dob = $input['dob'];
            $candidate->gender = $input['gender'];
            $candidate->qualification = $input['qualification'];
            $candidate->resume = $filename;
            $candidate->message = $input['message'];

            $candidate->save();

            // save in resume folder
            $destinationPath = base_path('public\assets\resumes'); //to be stored

            $ans = $file->move($destinationPath, $filename);
            if (!is_null($ans)) {
                return back()->with('success', ' Thanks for Applying !');
            } else {
                return back()->with('fail', ' Error while uploading your resume !');
            }
        } else { // user has already applied.
            return back()->with('fail', "You've already applied!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(career $career)
    {
        //
    }
}
