<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/LoginSystem">LoginSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LoginSystem/welcome.php">Home</a>
        </li>';
        if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false)
        {
          echo'
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/LoginSystem/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/LoginSystem/signup.php">SignUp</a>
          </li>';
        }
        else{
          echo'
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LoginSystem/logout.php">Logout</a>
          </li>';
        }
      echo'
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

?>