<?php

namespace App\Http\Controllers;
use app\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // To Display the list of tasks
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        Task::create([
            'title'=> $request->title,
        ]);
        return redirect('/');
    }
}
