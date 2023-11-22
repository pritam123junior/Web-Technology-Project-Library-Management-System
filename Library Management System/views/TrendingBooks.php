
<html>

<body>
<h2>Trend Book</h2>
<?php
require_once('../models/db.php');
session_start();

$con = getConnection();
$sql = "select * from trendingbooks";
$result = mysqli_query($con, $sql);

   
    

?>
       <h2>Top Trending Book of  this  month</h2>
       <br />
	<a href="admin_home.php">HOME</a>
<table border="1" cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Book_ID	</td>
        <td>Book_Name </td>
        <td>Total_Borrow</td>
        <td>Total_Return</td>
   
   </tr>  
        
             <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$id=$data['Book_ID']?></td>
        <td><?=$data['Book_Name']?></td>   
        <td><?=$data['Total_Borrow']?></td> 
        <td><?=$data['Total_Return']?></td> 


             </tr>
             <td>
                   <button><a href="trend.php?id=<?=$id?>">Trend Books  </a> </Button>
             </td>
            
        <?php
                    
                  }
                
                   
        ?>
</table>
    

</body>
</html>
<?php