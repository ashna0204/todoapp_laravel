@extends('layouts.default')
@section('content')

<!-- Begin page content -->
<main class="flex-shrink-0 mt-5">
  <div class="container" style="max-width: 800px;">
    <div class="my-3 p-3 bg-body rounded shadow-sm" style="background-color: #FFEEF3;">
      <h1 class="m-3 font-bold text-lg" style="color: #FF6FB1;">Welcome {{auth()->user()->name}}</h1>
      <hr />
      <h6 class="border-bottom pb-2 mt-3 mb-2" style="color: #FF6FB1;">List of Tasks</h6>

      @foreach($tasks as $task)
      <div class="d-flex text-body-secondary pt-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right" style="color: #FF6FB1;">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" />
          <path d="M16 12l-4 -4" />
          <path d="M16 12h-8" />
          <path d="M12 16l4 -4" />
        </svg>
        <div class="pb-3 mb-0 small lh-sm border-bottom w-100" style="border-color: #FF6FB1;">
          <div class="d-flex justify-content-between">
            <strong class="text-gray-dark" style="color: #FF6FB1;">{{$task->title}} | {{$task->deadline}}</strong>
            <a href="{{route('tasks.status.update', $task->id)}}" class="btn btn-success" style="background-color: #FF6FB1; border-color: #FF6FB1;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
            </a>

            <a href="{{route('tasks.delete', $task->id)}}" class="btn btn-danger" style="background-color: #FF6FB1; border-color: #FF6FB1;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 7l16 0" />
                <path d="M10 11l0 6" />
                <path d="M14 11l0 6" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
              </svg>
            </a>
          </div>
          <span class="d-block">{{$task->description}}</span>
        </div>
      </div>
      @endforeach

      <div class="pagination" style="color: #FF6FB1;">  
        {{$tasks->links()}}
      </div>
    </div>
  </div>
</main>
@endsection
