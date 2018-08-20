<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Index Method should list and fetch all tasks in a view
    public function index()
    {
         $tasks = Task::all();
         return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Request the title data and store and redirect back to index
    public function store(Request $request)
    {
        $tasks = Task::create($request->only('title'));
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     
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
    //Returning the Task Data to view for Edit
    public function edit(Tasks $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Request the title and update it and redirect it back to index
    public function update(Request $request, Tasks $task)
    {
        $task->update($request->only('title'));
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Destroy method ‘activates’ the route model binding to get the correct task from eloquent to delete.
    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
