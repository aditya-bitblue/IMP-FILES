<?php

namespace App\Http\Controllers;

use App\Models\Example;
use App\Models\Todo;
use Illuminate\Http\Request;

class ExampleController extends Controller
{

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
        return view('createexample');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res= new Example;
        $res->name=$request->input('name');
        $res->save();
        return redirect("examples");
        // $request->session()->flash('msg','Added ur record');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    { 
        $x = Example::all();
        return view('examplesshow')->with('todoArr',Example::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function edit(Example $example,$id)
    {   // with is basically used to send the data at the endpoint specified
        return view('example_edit')->with('todoArr',Example::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Example $example)
    {
        $res=Example::find($request->id);
        $res->name=$request->input('name');
        $res->save();
        return redirect("examples");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example,$id)
    {
        //
        Example::destroy(array('id',$id));

        return redirect('examples');

    }
}
