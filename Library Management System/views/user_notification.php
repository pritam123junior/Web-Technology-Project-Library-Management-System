<?php
require_once('../models/db.php');
session_start();
$userid= $_SESSION["id"];
$con = getConnection();
$sql = "select * from $userid";
$result = mysqli_query($con, $sql);





?>

<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Notification</h2>
<table cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Notification ID</td>
        <td>Notification Data</td>
        <td>time</td>
   
   </tr>  
        
             <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$data['Notification_ID']?></td>
        <td><?=$data['Notification_Data']?></td>   
        <td><?=$data['date']?></td>             
        <?php 
                    
            }
        ?>
</table>
<br />
	<a href="user_home.php">HOME</a>
            
  
</body>
</html>
              
<?php 
                 
                
            ?>