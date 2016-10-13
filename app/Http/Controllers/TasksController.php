<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Http\Requests;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::get();

    	return view('tasks', compact('tasks'));
    }

    public function showEditForm(Task $task)
    {
    	return view('edit', compact('task'));
    }

    public function saveEdits(Task $task, Request $request)
    {
    	$task->name   	   = $request->input('name');
    	$task->description = $request->input('description');
    	$task->completed   = $request->has('completed');
    	$task->save();

    	return redirect('tasks')->with('message', 'Task updated');
    }

    public function showCreateForm()
    {
    	return view('create');
    }

    public function createTask(Request $request)
    {
    	$task = new Task();
    	$task->name 	   = $request->input('name');
    	$task->description = $request->input('description');
    	$task->completed   = $request->has('completed');
    	$task->save();

    	return redirect('tasks')->with('message', 'Task created');
    }

    public function deleteTask(Task $task)
    {
    	$task->delete();

    	return redirect('tasks')->with('message', 'Task deleted');
    }
}
