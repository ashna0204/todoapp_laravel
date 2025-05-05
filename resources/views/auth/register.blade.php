 @extends('layouts.auth')
 @section('style')
 <style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
 </style>
 @endsection
 @section('content')
 <main class="form-signin w-100 m-auto">
  <form method="post" action="{{route('register.post')}}">
    @csrf
   
    <h1 class="h3 mb-3 fw-normal">
        Create an account
    </h1>
  <div class="form-floating">
      <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter your name">
      <label for="fullname">Full name</label>
      @error('fullname')
      <span class="text-danger">{{$message}}</span>
      @enderror
      
    </div>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
      @error('email')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
 
    <button class="btn btn-primary w-100 py-2" type="submit"> Register</button>
    <a href="{{route('login')}}" class="text-center">Already have an account?</a>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2025</p>
  </form>
</main>
 @endsection