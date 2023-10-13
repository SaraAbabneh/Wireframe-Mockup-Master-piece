<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Student = Student::all();
        return view('dashboard.students.index', compact('Student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::extend('date_greater_than_today', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->greaterThan(Carbon::now());
        });

        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|email|unique:Student,email',
            // Corrected uniqueness check
            'Phone' => 'required|string|unique:Student|max:15',
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_greater_than_today',
            'position' => 'required|string|max:255',
            'linkedin' => 'url|nullable',
            'img' => 'image|mimes:jpeg,png,gif|max:2048',
            // Assuming 'img' is an image upload field
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student, $id)
    {
        $Student = Student::findOrFail($id);

        return view('dashboard.students.edit', compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $Student, $id)
    {
        Validator::extend('date_greater_than_today', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->greaterThan(Carbon::now());
        });

        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|email|unique:Student,email',
            'Phone' => 'required|string|unique:Student|max:15',
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_greater_than_today',
            'Major' => 'required|string|max:255',
            'github' => 'url|required',
            'linkedin' => 'url|required',
            'img' => 'image|mimes:jpeg,png,gif|max:2048',
            // Assuming 'img' is an image upload field
        ]);

        Student::where('id', $id)->update($request->all());

        return redirect()->route('Students.index')->with('success', 'Students updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $Student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return back()->with('success', 'Student deleted successfully.');
    }
}