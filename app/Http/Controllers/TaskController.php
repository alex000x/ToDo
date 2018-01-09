<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all();
       return view('tasks.index', [
           'tasks' => $tasks
       ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
