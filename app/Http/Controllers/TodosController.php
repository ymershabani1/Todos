<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();

        return view('todos')->with('todos', $todos);
    }
}
