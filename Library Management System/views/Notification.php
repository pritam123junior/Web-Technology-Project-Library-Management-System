<?php
  require_once('../models/userModel.php');
  require_once('../models/db.php');
  $Notification = getNotification();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Notification</h2>
<table border="1" cellspacing="0" align="center" cellpadding="5">
    <tr>
        <td>Notification Alert!</td>

    </tr>
     <tr>
        <td>User_ID</td>
        <td>User Name</td>
        <td>Due Date</td>
        <td>Status </td>
        <td>Action</td>
       </tr>
            
    
               <?php for($i=0; $i<count( $Notification); $i++){
        ?>
                    
             <tr>
                    <td><?= $Notification[$i]['User_ID']?></td>
                    <td><?= $Notification[$i]['User_Name']?></td>
                    <td><?= $Notification[$i]['Due_Date']?></td>
                    <td><?= $Notification[$i]['Status']?></td>
                    <td><?= $Notification[$i]['Action']?> <a href="Notification_Center.php?id=<?=$Notification[$i]['User_ID']?>">ALERT !</a> </td>
                   
            
                 
               </tr>    
                    
        <?php 
                    
            }
        ?>
</table> 
<br />
	<a href="admin_home.php">HOME</a>
            
</body>
</html>