<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function ajouter(Request $request ){
        if ($request->isMethod('post')){
            $task =new Task();
            $task->nom = $request->nom;
            $task->contenu = $request->contenu;
            $task->user_id = Auth::user()->id;
            $task->save();
            return redirect('/');
        }
        return view('ajouter');

    }

    public function supprimer(Task $task){
        $task->delete();
        return redirect('/');

    }

    public function modifier(Request $request,Task $task){
        if ($request->isMethod('post')){
            $task->nom = $request->nom;
            $task->contenu = $request->contenu;
            $task->save();
            return redirect('/');
        }

        return view('modifier',compact('task'));

    }
}
