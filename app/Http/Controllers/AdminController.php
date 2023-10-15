<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Report;
use App\Models\Task;
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
        $Report = Report::get();
        // dd($Report);
        $Task = Task::get();
        return view('dashboard.admins.index', compact('Admin','Task','Report'));
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

        Validator::extend('date_less_than_today', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->lessThan(Carbon::now());
        });

        $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|email|unique:admins',
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/', 'confirmed'],
            'Phone' => ['required', 'numeric', 'unique:admins', 'regex:/^07\d{8}$/'],
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_less_than_today',
            'position' => 'required',
            'linkedin' => 'url|required|unique:admins',
            'img' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        // Determine the role based on the selected position
        $role = 2; // Default to 'Other' role

        if ($request->position == 'manager') {
            $role = 0;
        } elseif ($request->position == 'technical') {
            $role = 1;
        }

        $admin = new Admin;
        $admin->First_name = $request->input('First_name');
        $admin->Last_name = $request->input('Last_name');
        $admin->Email = $request->input('Email');
        $admin->password = $request->input('password');
        $admin->Phone = $request->input('Phone');
        $admin->Gender = $request->input('Gender');
        $admin->Date_of_birth = $request->input('Date_of_birth');
        $admin->position = $request->input('position');
        $admin->linkedin = $request->input('linkedin');
        $admin->Role = $role;

        // Handle image upload
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('backend\images');
            $admin->img = $imagePath;
  
        }

        dd('admin finall', $admin->img);

        $admin->save();

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
    public function edit($id)
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
    public function update(Request $request, $id)
    {

        // Define custom validation rule
        Validator::extend('date_less_than_today', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->lessThan(Carbon::now());
        });


        $request->validate([
            'First_name' => 'required|alpha|max:255',
            'Last_name' => 'required|alpha|max:255',
            'Email' => 'required|email|unique:admins,Email,' . $id,
            'password' => ['string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/'],
            'Phone' => [
                'required',
                'numeric',
                'unique:admins,Phone,' . $id,
                'regex:/^07\d{8}$/'
            ],
            'Gender' => 'required|in:Male,Female',
            'Date_of_birth' => 'required|date|date_less_than_today',
            'position' => 'required',
            'linkedin' => 'url|required|unique:admins,linkedin,' . $id,

            'img' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.index')->with('error', 'Admin not found.');
        }
        // Define a variable to store the role value
        $role = 2; // Default to 'Other' role

        // Check the selected position and set the role accordingly
        if ($request->position == 'manager') {
            $role = 0;
        } elseif ($request->position == 'technical') {
            $role = 1;
        }

        // Update the fields based on the request
        $admin->First_name = $request->input('First_name');
        $admin->Last_name = $request->input('Last_name');
        $admin->Email = $request->input('Email');
        $admin->Phone = $request->input('Phone');
        $admin->Gender = $request->input('Gender');
        $admin->Date_of_birth = $request->input('Date_of_birth');
        $admin->position = $request->input('position');
        $admin->linkedin = $request->input('linkedin');
        $admin->password = $request->input('password');
        $admin->Role = $role;



        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('backend\images');
            $admin->img = $imagePath;

        }

        dd('admin finall', $admin->img);


        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
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