<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Report;


class LogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('dashboard.dashboard_login');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {

        // dd($request->all());
        $check = $request->all();
        // dd('true',$check['email']);

        if (Auth::guard('Admin')->attempt(['Email' => $check['email'], 'password' => $check['password']])) {
            // dd('true', $check['email']);

            return redirect()->route('admin-dashboard');
        } else {
            dd('false');

            return redirect()->back()->with('error', 'Your Credintal is invalid');
        }
    }

    public function dashboard()
    {
        $Report = Report::get();
        // dd($Report);
        $Task = Task::get();
        // dd($Tasks);
        return view('dashboard.index_dashboard', compact('Task','Report'));
        // return redirect()->route('cohorts.index');
    }

    public function logout ()
    {

        Auth::guard('Admin')->logout();
        return redirect()->route('admin-login-page')->with('success', 'You Have Logout Success');


    }


}