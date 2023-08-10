<?php

    echo "<nav class='navbar navbar-expand-lg  bg-body-tertiary bg-dark'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='/forums/index.php'>K-POP</a>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
          <li class='nav-item'>
            <a class='nav-link active' aria-current='page' href='/forums/about.php'>About Us</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='/forums/contact.php'>Contact Us</a>
          </li>
          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Dropdown
            </a>
            <ul class='dropdown-menu'>
              <li><a class='dropdown-item' href='#'>Action</a></li>
              <li><a class='dropdown-item' href='#'>Another action</a></li>
              <li><hr class='dropdown-divider'></li>
              <li><a class='dropdown-item' href='#'>Something else here</a></li>
            </ul>
          </li>
          <li class='nav-item'>
            <a class='nav-link disabled' aria-disabled='true'>Disabled</a>
          </li>
        </ul>
        <div class='flex-row mx2'>
            <form class='d-flex' role='search'>
              <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
              <button class='btn btn-success' type='submit'>Search</button>
            </form>
            <button class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#loginModal'>LogIn</button>
            <button class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#signupModal'>SignUp</button>
        </div>
      </div>
    </div>
  </nav>";

  include "parts/login.php";
  include "parts/signup.php";
?>

