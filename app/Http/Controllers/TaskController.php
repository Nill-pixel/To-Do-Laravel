<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('app', ['tasks' => Task::latest()->paginate()]);
    }

    public function edit(Task $task)
    {
        return view('app', ['task' => $task, 'tasks' => Task::latest()->paginate()]);
    }

    public function store(TaskRequest $taskRequest)
    {
        $task = Task::create($taskRequest->validated());
        return redirect()->route('task.home')->with('success', 'Task created successfully');
    }

    public function update(Task $task, TaskRequest $taskRequest)
    {
        $task->update($taskRequest->validated());
        return redirect()->route('task.home')->with('success', 'Task update successfully');
    }
    public function complete(Task $task)
    {
        $task->toggleCompleted();
        return redirect()->route('task.home')->with('success', 'Task completed successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.home')->with('success', 'Task deleted successfully');
    }
}
