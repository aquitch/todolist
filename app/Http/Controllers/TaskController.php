<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use App\Models\User;

class TaskController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('tasks.index')->with('tasks', $user->tasks);
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
    public function store(Request $request)
    {
        $request->validate([
            'task-name'=>'required',
        ]);

        $task = new Task();
        $task->name=strip_tags($request->input('task-name'));
        $task->user_id=auth()->user()->id;

        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($task)
    {
        $record = Task::find($task);

        if($record===false){
            abort(404);
        }

        return view('tasks.show', [
            'task'=>$record
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($task)
    {
        return view('tasks.edit', [
            'task'=>Task::findOrFail($task)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task)
    {
        $request->validate([
            'task-name'=>'required'
        ]);

        $record = Task::findOrFail($task);

        $record->name=strip_tags($request->input('task-name'));

        $record->save();

        return redirect()->route('tasks.index', $task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        //Task::where('id', $task)->delete();
        $record = Task::findOrFail($task);
        $record->delete();

        return redirect()->route('tasks.index');
    }
}


