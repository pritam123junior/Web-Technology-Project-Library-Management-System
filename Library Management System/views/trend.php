<?php

$id=$_GET['id'];

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Book_ID, Book_Name, Author,Genre,Quantity,Image  FROM bookdata WHERE Book_id='$id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $Book_ID=$row["Book_ID"];   $Book_Name=$row["Book_Name"]; $Author= $row["Author"];$Genre= $row["Genre"]; $Quantity= $row["Quantity"];
        ?> 
<html>

<body>
<h2>Trend Book</h2>

    
<form  method="POST" action="../views/trendbookcheck.php"enctype="multipart/form-data">
  <fieldset>
  <legend>Trending</legend>
  
  Bookid: <input type="text" name="Bookid" value="<?php echo $Book_ID;?>" > <br>
            Bookname: <input type="text" name="Bookname" value="<?php echo $Book_Name;?>" >   <br>
            Author: <input type="text" name="Author" value="<?php echo $Author;?>" >   <br>
            Genre:    <input type="text" name="Genre" value="<?php echo $Genre;?>" > <br>
            <input type="file" id="" name="image" value="" accept="image/jpeg, image/jpg, image/png" required>
                     <input type="submit" name="submit" value="Trend"><br/>
	<a href="TrendingBooks.php">BACK</a>
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