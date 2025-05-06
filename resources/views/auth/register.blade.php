 @extends('layouts.auth')
 @section('style')
 <style>
    html, body {
        height: 100%;
        font-family: 'Arial', sans-serif;
        background-color: #FFEEF3; /* Light pink pastel background */
        margin: 0;
        padding: 20px;
    }

    .form-signin {
        max-width: 400px;
        padding: 2rem;
        margin: 5rem auto;
        background: #ffffff; /* White background for the form */
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .form-signin h1 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #FF6FB1; /* Soft pink header */
        font-weight: bold;
        letter-spacing: 1px;
    }

    .form-floating {
        margin-bottom: 1.5rem;
    }

    .form-floating input {
        border-radius: 10px;
        padding: 1rem;
        background-color: #FFFCFC; /* Soft cream background for input */
        border: 1px solid #F0A1C1; /* Light pink border */
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    .form-floating input:focus {
        border-color: #FF6FB1; /* Vibrant pink focus border */
        box-shadow: 0 0 8px rgba(255, 111, 177, 0.5); /* Glow effect on focus */
    }

    .form-floating label {
        font-size: 1rem;
        color: #FF6FB1; /* Matching label color with the theme */
        transition: color 0.3s ease;
    }

    .form-floating input:focus ~ label {
        color: #FF6FB1;
    }

    .btn-primary {
        background-color: #FF6FB1; /* Malibu pink */
        border-color: #FF6FB1;
        border-radius: 10px;
        padding: 0.75rem;
        font-size: 1.1rem;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #FF3A7A; /* Darker shade of pink on hover */
        border-color: #FF3A7A;
    }

    .text-center {
        display: block;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 1rem;
        color: #FF6FB1;
    }

    .text-center a {
        color: #FF6FB1;
        text-decoration: none;
    }

    .alert {
        border-radius: 10px;
        margin-bottom: 1.5rem;
        font-size: 1rem;
        padding: 1rem;
    }

    .alert-success {
        background-color: #E6FFFB; /* Light mint green background for success */
        color: #2E8B57; /* Darker green for success message */
    }

    .alert-danger {
        background-color: #FFE6EB; /* Soft red-pink background for error */
        color: #D32F2F; /* Deep red for error message */
    }

    p.mt-5 {
        text-align: center;
        color: #FF6FB1;
        font-size: 0.9rem;
    }

    /* Subtle gradient background */
    .form-signin {
        background: linear-gradient(45deg, #FF6FB1, #FFB3D9);
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