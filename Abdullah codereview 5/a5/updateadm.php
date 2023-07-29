<?php
include "../db_Connect.php";

session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){ 
    header("Location:../login.php"); }

if(isset($_SESSION["user"])){ 
    header("Location:../ home.php"); 
}
$id=$_GET["X"];
$sql="SELECT * FROM `pets` WHERE id = $id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);


if(isset($_POST["update"])){
    $name=$_POST["name"];
    $location=$_POST["location"];
    $description=$_POST["description"];
    $size=$_POST["size"];
    $age=$_POST["age"];
    $vaccination=$_POST["vaccinated"];
    $breed=$_POST["breed"];
    $picture=$_POST["picture"];
   
        $sql="UPDATE `pets` SET `name`='$name',`picture`='$picture',`location`='$location',`description`='$description',`size`='$size',`age`='$age',`vaccinated`='$vaccination',`breed`='$breed' WHERE id=$id";
       $result=mysqli_query($connect,$sql);

    if($result){
        echo "success updateing";
    }else{
        echo "error";
    }
    
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <h2>Update media</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" value="<?= $row["name"] ?>" id="name" aria-describedby="name" name="name">
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="text" class="form-control" value="<?= $row["photo"] ?>" id="picture" aria-describedby="picture" name="picture">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control"value="<?= $row["location"] ?>" id="location" aria-describedby="location" name="location">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control"value="<?= $row["description"] ?>" id="description" aria-describedby="description" name="description">
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control"value="<?= $row["size"] ?>" id="size" aria-describedby="size" name="size">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">age</label>
                <input age="text" class="form-control"value="<?= $row["age"] ?>" id="age" aria-describedby="age" name="age">
            </div>
            <div class="mb-3">
                <label for="vaccinated" class="form-label">	vaccinated</label>
                <input type="text" class="form-control"value="<?= $row["	vaccinated"] ?>" id="vaccinated" aria-describedby="	vaccinated" name="vaccinated">
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" class="form-control" id="breed" aria-describedby="breed" name="breed">
            </div>
            
            
            <button name="update" type="submit" class="btn btn-primary">Update product</button>
            <a href="../dashboard.php" class="btn btn-warning">Back to home page</a>
        </form>
    </div>
    
</body>
</html>