<?php

$bok_id=$_GET['Bookid'];

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Quantity  FROM bookdata WHERE Book_id='$bok_id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
         $Quantity= $row["Quantity"];
        ?>  <!DOCTYPE html>
<html>
<title>Update Book</title>
<body>
<h2>Update Book</h2>
<form  method="POST" action="../controller/UpdateCheck.php"enctype="">
  <fieldset>
  <legend>Book Management</legend>
            
          
            Quantity <input type="INT" name="Quantity" value="<?php echo $Quantity;?>" > <br>
            <input type="submit" name="submit" value="Update BOOK">	<a href="ViewBook.php">BACK</a>

  </fieldset>
</form>
</body>
</html>
<?php 
        }
      } else {
        echo "0 results";
      }
      
   
      ?>
      
