<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Type;
use App\Models\Report;
use App\Models\Technology;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tasks = Task::all();
        // dd($Tasks);
        $Report = Report::get();
        // dd($Report);

        return view('dashboard.tasks.index', compact('Tasks','Task','Report'));
    }

    public function sidebar($admin_id,$type_id)
    {
        $Task = Task::where(('admin-id'==$admin_id)&&('type-id '==$type_id))->get();
        // dd($Tasks);
        return view('dashboard.tasks.index','Task');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Technologies=Technology::all();
        $Typies=Type::all();
        return view('dashboard.tasks.create',compact('Technologies','Typies'));

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
            'Description' => 'required',
            'Titel' => 'required',
            'technology_id' => 'required',
            'admin_id' => 'required',
            'type_id' => 'required',
            'end_at' => 'required|date|after:start_at',
            'start_at' => 'required|date',
        ]);
        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $Technologies=Technology::all();
        $Typies=Type::all();
        return view('dashboard.tasks.edit',compact('Technologies','Typies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task , $id)
    {
       
        $request->validate([
            'Description' => 'required',
            'Titel' => 'required',
            'technology_id' => 'required',
            'admin_id' => 'required',
            'type_id' => 'required',
            'end_at' => 'required|date|after:start_at',
            'start_at' => 'required|date',
        ]);

        $Task = Task::findOrFail($id);
        $Task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task , $id)
    {
        $Task = Task::findOrFail($id);
        $Task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
