<?php

$id=$_GET['id'];


        ?>  
<html>

<body>
<h2>Alert!</h2>
<form  method="POST" action="../controller/NotificationCheck.php"enctype="">
  <fieldset>
  <legend>Book Management</legend>
            User_id: <input type="text" name="User_id" value=" <?php echo $id ; ?>" > <br>
       
            Notification_Data: <input type="text" name="Notification_Data" value="" > <br>
                     <input type="submit" name="submit" value="submit">
	<a href="Notification.php">Back</a>
  </fieldset>
</form>
</body>
</html>
<?php