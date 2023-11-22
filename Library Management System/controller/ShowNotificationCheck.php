<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $id=$_POST['id'];

        $status = getNotify($id);
   
    
    }
  
?>