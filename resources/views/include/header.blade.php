<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #FF6FB1;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: #FFFFFF; font-weight: bold;">To Do App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" style="color: #FFFFFF;">Logout</a>
          </li>
        </ul>
        
        <a class="btn btn-light" href="{{route('tasks.add')}}" style="color: #FF6FB1; border-color: #FF6FB1;">Add Task</a>
        
      </div>
    </div>
  </nav>
</header>
