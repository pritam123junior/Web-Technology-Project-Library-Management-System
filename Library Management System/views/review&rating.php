<?php
include_once("../controller/R&RCheck.php");
include_once("../controller/userData.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bid = $_POST["Bookid"];
    
    // Store the user input in a session variable
    $_SESSION["Bookid"] = $bid;
    
    // Redirect to a page to display the result
 
    
}

$bok_id=$_GET['Bookid'];

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Book_ID, Book_Name, Author,Genre,Quantity  FROM bookdata WHERE Book_id='$bok_id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $Book_ID=$row["Book_ID"];   $Book_Name=$row["Book_Name"]; $Author= $row["Author"];$Genre= $row["Genre"]; $Quantity= $row["Quantity"];
        ?> 



<!DOCTYPE html>
<html>
<title>Review</title>
<body>

<form  method="POST" action=""enctype="">
                    <fieldset>
                        <legend> Rating & Reviews</legend>
                        <br />
	<a href="user_home.php">HOME</a>
                        <table >
                            <tr>
                                <td>Book_ID</td>
                                <td>:<input type="text" name="Bookid" value="<?php echo $Book_ID;?>" > </td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                        
                            <tr>
                                <td>User_Name</td>
                                <td>
                                    :<input type="varchar" name="User_Name" value=" <?php echo $user['name'] ?>" > 
                                </td>
                                
                            </tr>
                            
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td>
                               
                                       <select name="rating" id="rating" required>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>

                                  <br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Write a review</td>
                                <td>
                                    :<textarea name="review"  rows="6" ></textarea>

                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" id="" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
  




</table>

            
</body>
</html>
<?php 
        }
      } else {
        echo "0 results";
      }
      
   
      ?>
      