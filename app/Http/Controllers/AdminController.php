<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Admin = Admin::all();
        return view('dashboard.admins.index', compact('Admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admins.create');
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
            'Email' => 'required|email|unique:admin',
            'Phone' => 'required|string|unique:admin|max:15',
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_greater_than_today',
            'position' => 'required|string|max:255',
            'linkedin' => 'url|nullable',
            'Role' => 'required',
            'img' => 'image|mimes:jpeg,png,gif|max:2048',
            // Assuming 'img' is an image upload field
        ]);

        // Define a variable to store the role value
        $role = 2; // Default to 'Other' role

        // Check the selected position and set the role accordingly
        if ($request->position == 'manager') {
            $role = 0;
        } elseif ($request->position == 'technical') {
            $role = 1;
        }

        dd('request',$request);

        // Create the admin record with the role value
        $admin = Admin::create([
            'First_name' => $request->First_name,
            'Last_name' => $request->Last_name,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'Gender' => $request->Gender,
            'Date_of_birth' => $request->Date_of_birth,
            'position' => $request->position,
            'linkedin' => $request->linkedin,
            'Role' => $role,
            // Assign the determined role value
            'img' => $request->img,
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $Admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $Admin, $id)
    {
        $Admin = Admin::findOrFail($id);

        return view('dashboard.admins.edit', compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $Admin, $id)
    {
        Validator::extend('date_greater_than_today', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->greaterThan(Carbon::now());
        });

        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|email|unique:admin,email',
            // Corrected uniqueness check
            'Phone' => 'required|string|unique:admin|max:15',
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_greater_than_today',
            'position' => 'required|string|max:255',
            'linkedin' => 'url|nullable',
            'img' => 'image|mimes:jpeg,png,gif|max:2048',
            // Assuming 'img' is an image upload field
        ]);

        Admin::where('id', $id)->update($request->all());

        return redirect()->route('admins.index')->with('success', 'Admins updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return back()->with('success', 'Admin deleted successfully.');
    }
}