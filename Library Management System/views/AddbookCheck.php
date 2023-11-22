<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $Book_ID=$_POST['Bookid'];
    $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Quantity=$_POST['Quantity'];
   
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      else if($fileSize > 1000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
      }
      else{
        $Image = uniqid();
        $Image .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'upload/' . $Image);

    if( $Book_Name == "" || $Author== ""|| $Genre== ""|| $Quantity== ""|| $Image== ""){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
       
        $status = AddBook( $Book_ID, $Book_Name,$Author,$Genre, $Quantity,$Image);
        if($status){
           
            header('location: ../views/ViewBook.php');
        }else{
      echo "Error:";
      }
    

    }
    
    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');
    $sql ="CREATE TABLE $Book_ID(
         Book_ID varchar(250) ,
         User_Name varchar(255),
         Rating varchar(255),
         Reviews varchar(255),
         Date Datetime
     )";
     
   $status =mysqli_query($con,$sql);
   return $status;
 
  }  
    }
  }
?>