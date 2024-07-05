<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('app');
    }
    public function store(TaskRequest $taskRequest)
    {
        $task = Task::create($taskRequest->validated());
        return redirect()->route('task.home')->with('success', 'Task created successfully');
    }
}
