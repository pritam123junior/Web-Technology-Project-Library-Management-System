
<html>
<title>Add New Book</title>
<body>
<h2>Add Book</h2>
<form  method="POST" action="../views/AddbookCheck.php"enctype="multipart/form-data">
  <fieldset>
  <legend>Book Management</legend>
  
            Bookid: <input type="varchar" name="Bookid" value="" > <br>
            Bookname: <input type="text" name="Bookname" value="" > <br>
            Author: <input type="text" name="Author" value="" > <br>
            Genre:    <input type="text" name="Genre" value="" > <br>
            Quantity <input type="INT" name="Quantity" value="" > <br>
            <input type="file" id="" name="image" value="" accept="image/jpeg, image/jpg, image/png" required>
                     <input type="submit" name="submit" value="ADD BOOK">	
	<a href="ViewBook.php">BACK</a>
  </fieldset>
</form>
</body>
</html>
<?php