<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $book_id=$_POST['Bookid'];
    //$Serial_NUmbe=$_POST['Serial No.'];
    $User_Name=$_POST['User_Name'];
    $Rating=$_POST['rating'];
    $Reviews=$_POST['review'];
  
    date_default_timezone_set('Asia/Dhaka');
    $date = $modificationDate = date('Y-m-d H:i:s');

    if($book_id == ""|| $User_Name== ""|| $Rating== ""|| $Reviews== ""){
        echo "Please Enter Date first";   
    }else{
    
        $_SESSION['flag'] = "true";
        //$Books = ['User_Name'=> $User_Name,'Rating'=> $Rating,'Reviews'=> $Reviews,'Date'=> $date];
        $status = Review($book_id,$User_Name,$Rating,$Reviews,$date);
        //$status=Review($Books,$book_id);
        if($status){
           
            header('location: ../views/ReviewSubmission.php');
        }else{
      echo "Error:";
      }
    

    }
}