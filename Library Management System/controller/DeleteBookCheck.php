<?php 
require_once '../models/userModel.php';
    if(isset($_GET['Bookid'])){
       $Book_ID = $_GET['Bookid'];
    
          
        $status = DeleteUsers($Book_ID);
        
        if($status){
            header('location: ../views/ViewBook.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>
