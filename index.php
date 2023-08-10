<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php
  include "parts/_nav.php";
  ?>
  <h1 class="text-center">K-POP Groups</h1>
  <div class="row justify-content-center my-4">
  <?php
    include "parts/database.php";
    
    $query = "SELECT * FROM `discuss`";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result))
    {
      echo "<div class='card mx-2' style='width: 28rem;'>
      <div class='card-body'>
        <h5 class='card-title bg-dark text-white'>". $row['g_name'] ."</h5>
        <h6 class='card-subtitle mb-2 text-body-secondary'>Details</h6>
        <p class='card-text'>". $row['g_details'] ."</p>
        <a href='/forums/threads.php'><button class='btn btn-primary'>View Threads</button></a>
      </div>
    </div>";
    }
  ?>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</html>