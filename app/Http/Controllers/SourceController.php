<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;
use App\Models\Technology;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sources = Source::get();
        // dd($admins);
        return view('dashboard.sources.index', compact('Sources'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Technologies = Technology::get();
        return view('dashboard.sources.create', compact('Technologies'));

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
            'Admin_id' => 'required',
            'technology_id' => 'required',
            'Titel' => 'required',
            'source_1' => 'required',
            'source_2' => 'required',
        ]);

        Source::create($request->all());

        return redirect()->route('sources.index')->with('success', 'Source created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source, $id)
    {
        $Sources = Source::findOrFail($id);
        $Technologies = Technology::get();

        return view('dashboard.sources.edit', compact('Sources', 'Technologies'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Admin_id' => 'required',
            'technology_id' => 'required',
            'Titel' => 'required',
            'source_1' => 'required',
            'source_2' => 'required',
        ]);

        $source = Source::findOrFail($id);
        $source->update($request->all());

        return redirect()->route('sources.index')->with('success', 'Source updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source = Source::findOrFail($id);
        $source->delete();

        return redirect()->route('sources.index')->with('success', 'Source deleted successfully.');
    }
}