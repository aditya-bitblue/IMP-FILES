<?php

namespace App\Http\Controllers;

use App\Models\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
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
        //
        $request->validate([
            'email' => 'required|email|unique:contactuses',
            'name' => 'required | min:2 | max:10',
            'phone_number' => 'required | min:10 |numeric',
            'subject' => 'required | min:5',
            'message' => 'required | min:5 | max: 50',
        ]);

        $userquery = new contactus;


        $input = $request->all();
        $userquery->email = $input['email'];
        $userquery->name = $input['name'];
        $userquery->phone_number = $input['phone_number'];
        $userquery->subject = $input['subject'];
        $userquery->message = $input['message'];
        $userquery->save();

        return back()->with('success', 'Your query is registered !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function show(contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit(contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactus $contactus)
    {
        //
    }
}
