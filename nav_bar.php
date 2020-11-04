<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="">Department</a>
      </li> -->
      <li class="nav-item dropdown active" id="department">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Shift Roaster
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sub-department">
          <a class="dropdown-item" href="dailyshift.php">Daily</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Weekly</a>
          <div class="dropdown-divider"></div>
          <!-- <a class="dropdown-item" href="#">Total</a> -->
        </div>
      </li>
      <li class="nav-item dropdown active" id="division">
        <a class="nav-link dropdown-toggle" href="#" id="division" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Division
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="sub-division">
          <a class="dropdown-item" href="#">Present</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Absent</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Total</a>
        </div>
      </li>
      <li class="nav-item dropdown active" id="attendance">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Attendance
        </a>
        <div class="dropdown-menu" id="sub-attendance" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Present</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Absent</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Total</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="monitor.php">Monitor</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>