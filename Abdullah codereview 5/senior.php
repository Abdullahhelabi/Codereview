<?php
session_start();
require_once "db_connect.php";

    $media = "SELECT * FROM pets where age>=8";

    $resultMedia = mysqli_query($connect, $media);
    
    $mediaLayout = "";
    
    while($mediaRow = mysqli_fetch_assoc($resultMedia)){
    
    $mediaLayout.="<div class='card' style='width: 18rem;'>
    
    <div class='card-body'>
      <h5 class='card-title'>{$mediaRow["breed"]}</h5>
      <p class='card-text'>{$mediaRow["name"]}</p>
      <p class='card-text'>{$mediaRow["location"]}</p>
      <p class='card-text'>{$mediaRow["size"]}</p>
      <p class='card-text'>{$mediaRow["age"]}</p>
      <a href='a5/detailsadm.php?X={$mediaRow["id"]}' class='btn btn-primary'>Details</a>
    </div>
    </div>";
    
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">adoption center</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="home.php" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link"  href="logout.php?logout">logout</a>
        </li>
        
      
    </div>
  </div>
</nav>

<div class="container">
<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
    <?= $mediaLayout ?>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

