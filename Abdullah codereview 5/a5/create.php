<?php
include "../db_connect.php";

session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){ 
    header("Location: ../login.php"); 
}

if(isset($_SESSION["user"])){ 
    header("Location: ../home.php"); 
}

if(isset($_POST["create"])){
$id=$_POST["id"];
$name=$_POST["name"];
$location=$_POST["location"];
$description=$_POST["description"];
$size=$_POST["size"];
$vaccinated	=$_POST["vaccinated	"];
$age=$_POST["age"];
$breed=$_POST["breed"];
$status=$_POST["status"];
$photo=$_POST["photo"];



$sql="INSERT INTO `pets`( `name`, `photo`, `location`, `description`, `size`, `age`, `vaccinated`, `breed`, `status`) VALUES ('$name','$photo','$location','$description','$size','$age','$vaccinated','$breed','$status')";
$result=mysqli_query($connect,$sql);
if($result){



}else{

}





}



?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    
    <div class="container mt-5">
        <h2>Create a new media</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="id" class="form-label">id</label>
                <input type="number" class="form-control" id="id" aria-describedby="id" name="id">
            </div>
            <div class="mb-3">
                <label for="fname" class="form-label">first name</label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname" name="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lname" aria-describedby="lname" name="lname">
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="date_of_birth" aria-describedby="date_of_birth" name="date_of_birth">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" id="email" aria-describedby="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input password="text" class="form-control" id="password" aria-describedby="password" name="password">
            </div>
            
            <button name="create" type="submit" class="btn btn-primary">Create product</button>
            <a href="Main.php" class="btn btn-warning">Back to home page</a>
        </form>
    </div>
    
</body>
</html>