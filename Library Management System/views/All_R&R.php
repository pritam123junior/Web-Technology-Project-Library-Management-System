<?php
include_once("../models/db.php");
include_once("../controller/R&RCheck.php");

$bid = $_SESSION["Bookid"];

$con =getConnection();


$sql = "SELECT ROUND(AVG(Rating),1) AS average_rating FROM $bid ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average = $row['average_rating'];
    
    echo "<h1> Rating : " . $average . "</h1>";
} else {
    echo "0 results";
}

;
$bid = $_SESSION["Bookid"];

$sql = "select * from $bid";
$result = mysqli_query($con, $sql);
?>

<html>
<title>Reviews</title>
<body>
<h2>All Reviews</h2>
<a href="user_home.php">HOME</a>

<table  cellspacing="0" cellpadding="5">
     
        
<?php while($data = mysqli_fetch_assoc($result)){
  
?>
    <tr>
   
        <td><h3>BOOK_ID-<?=$data['Book_ID']?> </h3></td>
        </tr>
        <tr>
        <td><?=$data['User_Name']?></td>
       <td><?=$data['Date']?></td>
       <tr> 
        <td>Rate:<?=$data['Rating']?></td> 
    </tr>
    
        <td><?=$data['Reviews']?></td>   
           
  </tr>  
  <tr>
             <td colspan="2"><hr></td>
     </tr>           
        <?php 
                    
            }
              ?>
</table>

    </body>
    </html>
    <?php
  