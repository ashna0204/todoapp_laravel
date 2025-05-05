@extends('layouts.default')

@section('content')
 
 <div class="d-flex justify-content-center align-items-center mt-5" >
   
<div class="card  shadow-sm p-8" style="width: 30rem;">
    <div class="">
        <h2 class="text-center mt-2">Add Task</h2>
    </div>
    <form class="p-3" method="POST"  action="{{route('tasks.add.post')}}">
        @csrf
        <div class="mb-3">
  
  <input name="title" type="text" class="form-control" id="name" >
</div>
<div>
    <input name="deadline" type="datetime-local" class="form-control" id="date" name="date">
</div>
<div class="mb-3">
  
  <textarea name="description" class="form-control" id="" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>
</div>
@endsection