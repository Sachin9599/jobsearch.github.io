
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mx-4" id="basicExampleNav">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Top Companies</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true">My Admisstration</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">My bookmarks</a>
          <a class="dropdown-item" href="#">My job</a>
          <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">logout</a>
      </li>
    </ul>
  </div>
  <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary me-3" onclick="window.location.href = 'login.php';">
            Login</button>
            <button type="button" class="btn btn-primary me-3" onclick="window.location.href = 'signup.php';">
            Sign Up</button>
        </div>
</nav>
