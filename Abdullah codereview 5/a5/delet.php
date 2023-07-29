<?php
   
   include "../db_connect.php";
   session_start();
   if(!isset($_SESSION["user"]) && !isset($_SESSION["adm"])){ 
       header("Location: ../login.php"); 
   }
   
   if(isset($_SESSION["user"])){ 
       header("Location: home.php"); 
   }
   
   $id= $_GET["X"];
   $sql="SELECT * FROM `pets` WHERE id = $id";
   $result=mysqli_query($connect,$sql);
   $row=mysqli_fetch_assoc($result);
   $delete="DELETE FROM `pets` WHERE id=$id";
   if(mysqli_query($connect,$delete)){
   header("Location: ../dashboard.php");
   }else{
   
   }
   ?>