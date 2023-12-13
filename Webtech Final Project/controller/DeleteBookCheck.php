
<?php 
require_once '../models/userModel.php';
    //session_start();
    if(isset($_GET['Bookid'])){
       $Book_ID = $_GET['Bookid'];
    
          
        $status = DeleteBooks($Book_ID);
        
        if($status){
            header('location: ../views/Deletenewbook.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>
