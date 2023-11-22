<?php
  include_once("../models/db.php");
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
   
   
    $Quantity=$_POST['Quantity'];

    if(  $Quantity== ""){
        echo "Please Enter Date first";   
    }else{
    
        $Books = ['Quantity'=> $Quantity];
        $status = Update($Books);
        if($status){
           
            header('location: ../views/ViewBook.php');
        }else{
      echo "Error:";
      }
    
    }
  }  

?>