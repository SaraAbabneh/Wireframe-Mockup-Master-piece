<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Cohort;

class CohortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cohorts = Cohort::get();
        return view('dashboard.cohorts.index', compact('Cohorts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cohorts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'number' => 'required|numeric',
            'end_date' => 'required|date|after:start_date',
            // Added 'end_date' validation rule
            'start_date' => 'required|date',
            'number_students' => 'required|numeric',
            'number_employment' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
            ],
            'number_full_stack' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
            'number_front_end' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
            'number_back_end' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
        ]);

        $data = $request->except(['_token', '_method']);

        Cohort::where('id', $id)->update($data);
        return redirect()->route('cohorts.index')->with('success', 'Cohorts updated successfully.');
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
        $Cohorts = Cohort::findOrFail($id);
        // dd($Cohorts);

        return view('dashboard.cohorts.edit', compact('Cohorts'));
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
            'number' => 'required|numeric',
            'end_date' => 'required|date|after:start_date',
            // Added 'end_date' validation rule
            'start_date' => 'required|date',
            'number_students' => 'required|numeric',
            'number_employment' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
            ],
            'number_full_stack' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
            'number_front_end' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
            'number_back_end' => [
                'nullable',
                'numeric',
                Rule::requiredIf(function () use ($request) {
                    $end_date = $request->input('end_date');
                    return strtotime($end_date) > strtotime($end_date);
                }),
                'after:end_date',
            ],
        ]);

        $data = $request->except(['_token', '_method']);



        Cohort::where('id', $id)->update($data);


        return redirect()->route('cohorts.index')->with('success', 'Cohort updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cohort::destroy($id);
        return back()->with('success', 'Cohort deleted successfully.');
    }
}