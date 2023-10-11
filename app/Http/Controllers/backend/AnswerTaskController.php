<?php

namespace App\Http\Controllers;

use App\Models\Answer_task;
use Illuminate\Http\Request;
use App\Models\Student;


class AnswerTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students=Student::get();
        $Answer=Answer_task::get();
        return view('dashboard\answer-tasks\index',compact('Students','Answer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard\answer-tasks\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
        $request->validate([
            'file' => ['required'],
            'comment' => ['required', 'max:1000'],
            'status' => ['required'],
        ]);

        $Answer_task = new Answer_task();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $Answer_task->status =  $imagePath;
        $Answer_task->file = $request->name;        $Answer_task->save();
        
        toastr('Created Successfully!', 'success');

        return redirect()->route('category.index');
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
    public function update(Request $request, Answer_task $answer_task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer_task  $answer_task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer_task $answer_task)
    {
        //
    }
}
