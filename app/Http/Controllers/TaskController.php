<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
  public function taskList()
  {
    $tasks = Task::all();
    $priorityCounts = $tasks->groupBy('priority')->map->count();
    $mostRepeatedPriority = $priorityCounts
      ->sortDesc()
      ->keys()
      ->first();

    return view('tasks.taskList', ['tasks' => $tasks, 'mostRepeatedPriority' => $mostRepeatedPriority]);
  }

  public function createTask()
  {
    return view('tasks.createTask');
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'priority' => 'required|string|max:255',
      'dueDate' => 'required|date',
      'description' => 'nullable|string',
    ]);

    Task::create($validatedData);

    return redirect()->back();
  }

  public function edit($id)
  {
    $task = Task::findOrFail($id);

    return view('tasks.editTask', ['task' => $task]);
  }

  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'title' => 'required|string|max:255',
      'priority' => 'required|string|max:255',
      'dueDate' => 'required|date',
      'description' => 'nullable|string',
    ]);

    Task::findOrFail($id)->update($validatedData);

    return redirect()->back();
  }

  public function destroy($id)
  {
    Task::findOrFail($id)->delete();

    return redirect('/')->with('success', 'Task deleted successfully');
  }

  public function updateCompletion(Request $request, $id)
  {
    $request->validate([
      'completed' => 'boolean',
    ]);
    Task::findOrFail($id)->update(['completed' => $request->completed]);

    return redirect()
      ->back()
      ->with('success', 'Task completion status updated successfully');
  }
}
