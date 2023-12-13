
<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
$L_add = $_POST['Ladd'];
   
        if($L_add==true)
        {
            ?>
            <!DOCTYPE html>
            <html>
            <title>Add New Book</title>
            <body>
            <form method="POST" action="../controller/AddbookCheck.php" onsubmit="return validateForm()">
              <fieldset>
              <legend><h3><b>Catalog Management</b></h3></legend>
              
                       <h4> 
                                       Bookid :     <input type="INT" name="Bookid" value="" ><br>
                                      Bookname    :<input type="text" name="Bookname" value="" > <br>
                                       Author         :<input type="text" name="Author" value="" > <br>
                                     Catagory    : <input type="text" name="Catagory" value="" > <br>
                       
                                <input type="submit" name="submit" value="submit"><h4>
              </fieldset>
            </form>
            
            </body>
            </html>
            <?php
            



        }



