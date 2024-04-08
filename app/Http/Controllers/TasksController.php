<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::query()
            ->where('user_id',request()->user()->id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'description' => 'required|max:255'
    ]);

    $data['user_id'] = $request->user()->id;

    Task::create($data);

    return redirect('/home');
}


    public function update($id)
    {
        $task = Task::where('id', $id)
            ->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/home');
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)
            ->first();
        $task->delete();
        return redirect('/home');
    }
}

