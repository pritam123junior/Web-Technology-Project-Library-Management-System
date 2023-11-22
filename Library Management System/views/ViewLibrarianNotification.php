<?php
  require_once('../models/userModel.php');
  $viewbook = getlibrarianNotify();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Notification </h2>
<table border="1" cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Notification ID</td>
        <td>Notification_Data</td>
      
       </tr>
            
    
       <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewbook[$i]['Notification_ID']?></td>
                    <td><?=$viewbook[$i]['Notification_Data']?></td>
            
                   
            
               
               </tr>    
                    
        <?php 
                    
            }
        ?>
</table>
    
  
</body>
</html>