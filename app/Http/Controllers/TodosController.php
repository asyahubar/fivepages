<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Shows a list of all todos
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos', compact('todos'));
    }

    /**
     * Shows a form to create a new task
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('todos-new');
    }

    /**
     * Saves a new task to the database from the create page
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect('/todo');
    }

    /**
     * Shows one task by id
     *
     * @param integer $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todo', compact('todo'));
    }
}
