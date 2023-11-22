<?php
  require_once('../models/userModel.php');
  $viewbook = getviewbook();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>

       
        <h2>Book Details</h2>
        <br />
	<a href="admin_home.php">HOME</a>
<table  cellspacing="0" align="center" cellpadding="5">

            
    
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                    
             <tr>
                    <td>ID-<?=$id=$viewbook[$i]['Book_ID']?></td>
               </tr>
               <tr>
               <td><img src="upload/<?=$viewbook[$i]['image']?>"></td>
               </tr>
               <tr>
                    <td>Book Name:-<?=$viewbook[$i]['Book_Name']?></td>
                    <td>Author:=<?=$viewbook[$i]['Author']?></td>
               </tr>   

              <tr> 
                     <td>Genre:-<?=$viewbook[$i]['Genre']?></td>
                    <td>Quantity:-<?=$viewbook[$i]['Quantity']?></td>
               </tr>    
                   
       
                   
            <tr>
                   <td>
                   <button><a href="AddBook.php?Bookid=<?=$id?>">Add Book  </a> </Button>
                       <Button><a href="Update.php?Bookid=<?=$viewbook[$i]['Book_ID']?>"> Update</a> </Button>
                       <Button>  <a href="DeleteBook.php?Bookid=<?=$viewbook[$i]['Book_ID']?>">Remove  </a></Button>
                     
                    </td>
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