@extends('layouts.default')

@section('content')

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow-sm p-5" style="width: 30rem; background-color: #FFEEF3;">
        <div class="text-center">
            <h2 class="mt-2" style="color: #FF6FB1;">Add Task</h2>
        </div>
        <form class="p-3" method="POST" action="{{route('tasks.add.post')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="color: #FF6FB1;">Task Title</label>
                <input name="title" type="text" class="form-control" id="name" placeholder="Enter task title" style="border-color: #FF6FB1;">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label" style="color: #FF6FB1;">Deadline</label>
                <input name="deadline" type="datetime-local" class="form-control" id="date" style="border-color: #FF6FB1;">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label" style="color: #FF6FB1;">Task Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Describe your task..." style="border-color: #FF6FB1;"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary" style="background-color: #FF6FB1; color: white; border-color: #FF6FB1;">Submit</button>
        </form>
    </div>
</div>

@endsection
