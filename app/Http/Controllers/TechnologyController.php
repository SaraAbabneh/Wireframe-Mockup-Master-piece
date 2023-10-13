<?php

namespace App\Http\Controllers;
use App\Models\Technology;

use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Map = Technology::all();
        // dd($admins);
        return view('dashboard.Technology.index', compact('Map'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Technology.create');

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
            'Technology' => 'required',
            'end_at' => 'required|date|after:start_at',
            'start_at' => 'required|date',
        ]);

        Technology::create($request->all());

        return redirect()->route('Technology.index')->with('success', 'Technology created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Map = Technology::findOrFail($id);

        return view('dashboard.Technology.edit', compact('Map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Technology' => 'required',
            'end_at' => 'required|date|after:start_at',
            'start_at' => 'required|date',
        ]);

        $Technology = Technology::findOrFail($id);
        $Technology->update($request->all());

        return redirect()->route('Technology.index')->with('success', 'Technology updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Map = Technology::findOrFail($id);
        $Map->delete();

        return redirect()->route('Technology.index')->with('success', 'Technology deleted successfully.');
    }
}
