<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $user_id=$_POST['User_id'];
    
    $Notification_Data=$_POST['Notification_Data'];
     date_default_timezone_set('Asia/Dhaka');
    $date = $modificationDate = date('Y-m-d H:i:s');

    if(  $user_id == ""|| $Notification_Data== ""){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
        $Books = ['Notification_Data'=> $Notification_Data,'Date'=> $date];
        $status = Notify($Books,$user_id);
        if($status){
           
            header('location: ../views/Notification.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>