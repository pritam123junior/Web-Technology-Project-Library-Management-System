
<?php

if (isset($_POST['submit'])){
    $bid=$_POST['Bookid'];
    //$Serial_NUmbe=$_POST['Serial No.'];

     
        if($bid==true){
           
            header('location: ../views/review&rating.php');
        }else{
      echo "Error:";
      }
    

    }

?>