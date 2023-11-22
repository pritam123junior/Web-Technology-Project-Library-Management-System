<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $Notification_ID=$_POST['Notification_ID'];
    $Notification_Data=$_POST['Notification_Data'];
   

    if(  $Notification_Data == "" ){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
       
       $status = librarianNotify($Notification_ID,$Notification_Data);
        if($status){
           
            header('location: ../views/Notification.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>