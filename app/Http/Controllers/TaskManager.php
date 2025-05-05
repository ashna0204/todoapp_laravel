<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use App\Http\Providers\AppServiceProvider;
use Illuminate\Http\Request;

class TaskManager extends Controller
{
    function addTask(){
        return view('tasks.add');
    }

    function addTaskPost(Request $request){
        $request->validate([
            'title' =>'required',
            'description' => 'required',
            'deadline' => 'required|date',
        ]);
        $task = new Tasks();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->user_id = auth()->user()->id;

        if($task->save()){
            return redirect()->route('home')->with('success','Task added successfully');
        }
       
    }
    function listTask(){
       $tasks=Tasks::where('user_id',auth()->user()->id)->where('status','!=','completed')->paginate(3);
       return view('welcome',compact('tasks'));
    }
    function updateTask($id){
        if(Tasks::where('user_id',auth()->user()->id)->where('id',$id)->update(['status'=>'completed'])){
            return redirect()->route('home')->with('success','Task updated successfully');
        }
        return redirect()->route('home')->with('error','Task update failed');
    }
    function deleteTask($id){
        if(Tasks::where('user_id',auth()->user()->id)->where('id',$id)->delete()){
            return redirect()->route('home')->with('success','Task deleted successfully');
        }
        return redirect()->route('home')->with('error','Task deletion failed');
    }
}
