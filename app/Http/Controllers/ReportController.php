<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Task;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Report = Report::get();
        // dd($Report);
        $Task = Task::get();
        return view('dashboard.Report.index', compact('Report','Task','Report'));
    }


    public function sidebar($admin_id)
    {
        $Report = Report::where(('Admin_id'==$admin_id))->get();
        // dd($Report);
        return view('dashboard.Report.index', compact('Report'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Reports = Report::get();
        return view('dashboard.Report.create', compact('Reports'));

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
            'admin_id' => 'required',
            'type_id' => 'required',
            'Titel' => 'required',
            'file' => 'required',
        ]);

        Report::create($request->all());

        return redirect()->route('Report.index')->with('success', 'Report created successfully.');
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
     
        return view('dashboard.Report.edit', compact('Sources', 'Technologies'));

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
            'admin_id' => 'required',
            'type_id' => 'required',
            'Titel' => 'required',
            'file' => 'required',
        ]);

        $Report = Report::findOrFail($id);
        $Report->update($request->all());

        return redirect()->route('Reports.index')->with('success', 'Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Report = Report::findOrFail($id);
        $Report->delete();

        return redirect()->route('Reports.index')->with('success', 'Report deleted successfully.');
    }
}
