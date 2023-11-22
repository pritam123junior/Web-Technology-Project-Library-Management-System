<?php
if (isset($_POST["submit"])){
 $id = $_POST["id"];
$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');
    $sql ="CREATE TABLE $id (
         Notification_ID int,
         Notification_Data varchar(255)
     )";
   $status =mysqli_query($con,$sql);
     return $status;
     if($status){
           
        header('location: ../views/Login.php');
    }else{
  echo "Error:";
  }
}
 ?>    