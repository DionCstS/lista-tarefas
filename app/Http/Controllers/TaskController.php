<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $titulo = $request->title;
        $descricao = $request->description;

        $task = new Task();
        $task->title = $titulo;
        $task->description = $descricao;
        $task->save();

        return redirect()->route('task.index');
    }

}
