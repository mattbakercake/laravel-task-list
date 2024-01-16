<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    /**
     * show all tasks from root uri
     */
    public function index(): View
    {
        return view('tasks', [
            'tasks' => Task::all()->where('complete','=',false) 
        ]);
    }

    /**
     * Update a task
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->complete = false;
        $task->save();

        $request->session()->flash('success', "Task updated: $task->name");

        return redirect('/');
    }

    /**
     * store a new task
     */
    public function store(Request $request):RedirectResponse
    {
        //validate new task content
        $validated = $request->validate([
            'name' => 'required|unique:tasks',
            'description' => 'required',
        ]);

        //validation passed - save task
        $task = new Task;
        $task->name = htmlentities($request->name);
        $task->description = htmlentities($request->description);
        $task->complete = false;
        $task->save();

        //flash success message to session
        $request->session()->flash('success', "Task Created: $task->name");

        //redirect to task list
        return redirect('/');
    }

    /**
     * edit a task
     */
    public function edit(Request $request, $id):View
    {
        return view('edit_task', [
            'task' => Task::findOrFail($id)
        ]);
    }

    /**
     * set task complete
     */
    public function complete(Request $request, $id):RedirectResponse
    {
        $task = Task::find($id);
        $task->complete = true;
        $task->save();

        $request->session()->flash('success', "Task Completed: $task->name");

        return redirect('/');
    }
}
