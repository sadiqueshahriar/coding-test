<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'title' => $validated['title'],
        ]);

        return response()->json($task, 201);
    }

    // Mark Task as Completed
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);

        $task = Task::findOrFail($id);
        $task->update([
            'is_completed' => $validated['is_completed'],
        ]);

        return response()->json($task);
    }

    // Get Pending Tasks
    public function pending()
    {
        $tasks = Task::where('is_completed', false)->get();

        return response()->json($tasks);
    }
}
