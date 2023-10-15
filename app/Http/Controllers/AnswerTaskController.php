<?php

namespace App\Http\Controllers;

use App\Models\Answer_task;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Report;
use App\Models\Task;


class AnswerTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = Student::get();
        $Answer = Answer_task::get();
        $Report = Report::get();
        // dd($Report);
        $Task = Task::get();
        return view('dashboard.answer-tasks.index', compact('Students', 'Answer','Task','Report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.answer-tasks.create');
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
            'file' => ['required'],
            'comment' => ['required', 'max:1000'],
            'status' => ['required'],
        ]);

        $Answer_task = new Answer_task();
        $Answer_task->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('answer-tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer_task  $answer_task
     * @return \Illuminate\Http\Response
     */
    public function show(Answer_task $answer_task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer_task  $answer_task
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer_task $answer_task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer_task  $answer_task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer_task $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->except(['_token', '_method']);

        Answer_task::where('id', $id)->update($data);
        return redirect()->route('answer-tasks.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer_task  $answer_task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer_task::destroy($id);
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}