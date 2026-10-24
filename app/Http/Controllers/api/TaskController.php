<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        return respon()->json([
        ['id' => '1', 'title' == 'Belajar 1', 'is_done' => false],
        ['id' => '2', 'title' == 'Belajar 2', 'is_done' => false],
        ['id' => '3', 'title' == 'Belajar 3', 'is_done' => false],
        ]);
    }
    
    public function store(Request $request){
       $task = Task::create([
        'title'=> $request->input("title"),
        'description' => $request->input('description'),
       ]);
       return response()->json($task, 201);
    }


    
}
