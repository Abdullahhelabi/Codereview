<?php
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){ 
    header("Location: login.php"); }

if(isset($_SESSION["user"])){ 
    header("Location: home.php"); 
}

include "db_connect.php";
$sql="SELECT * FROM `users`WHERE id={$_SESSION["adm"]}";
$result=mysqli_query($connect, $sql);
$row=mysqli_fetch_assoc($result);
$sqlUsers = "SELECT * FROM pets";
$resultUsers = mysqli_query($connect, $sqlUsers);

$layout="";
if(mysqli_num_rows($resultUsers)>0){
while($userrow=mysqli_fetch_assoc($resultUsers)){
$layout.="<div class='card' style='width: 18rem;'>
<div class='card-body'>
  <h5 class='card-title'>{$userrow["name"]}</h5>
  <img src='{$userrow["photo"]}' class='card-img-top' alt='...'>
  <p class='card-text'>{$userrow["description"]}</p>
  <a href='a5/detailsadm.php?X={$userrow["id"]}' class='btn btn-primary'>Details</a>
  <a href='a5/updateadm.php?X={$userrow["id"]}' class='btn btn-primary'>update</a>
  <a href='a5/delet.php?X={$userrow["id"]}' class='btn btn-primary'>Delete</a>
</div>
</div>";
}

}else{
$layout.="No";
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
    <a class="navbar-brand" href="#">welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="practice/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="practice/create.php">Create media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        
        
        
        
    </div>
  </div>
</nav>
<div class="container">
   
<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
<?php echo $layout ?>

</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>