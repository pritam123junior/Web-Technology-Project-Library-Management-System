<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
if(isset($_SESSION['flag'])){
    $_SESSION['pp']="../Assests/profilepicture.png";
}
require_once('../models/db.php');
require_once('../models/userModel.php');
$uid=$user['id'];

   $con = getConnection();
 $sql = "select * from reg_info
 WHERE id='".$uid."'";   
 $result = mysqli_query($con, $sql);
?>



<?php 
if(isset($_POST['submit']))
{
    
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($tempname,$filename);
    $_SESSION['pp']=$filename;

}
?>


<html>
<head>
    <title>Change Profile Picture</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style12.css">
    
    <script>
        function validate() {
       
            var inputFile = document.getElementById('imageInput');
            var errorSpan = document.getElementById('error');

        
            if (inputFile.files.length === 0) {
                errorSpan.textContent = 'Please select an image file.';
                return false;
            }

     
            var fileName = inputFile.files[0].name;
            var fileExtension = fileName.split('.').pop().toLowerCase();

            var allowedExtensions = ['jpeg', 'png', 'gif'];

           
            if (allowedExtensions.indexOf(fileExtension) === -1) {
                errorSpan.textContent = 'Invalid file type. Please select a valid image file.';
                return false;
            }

       
            errorSpan.textContent = '';

           
            return true;
          
        }
    </script>  
    </head>

<body>
    <div class="container">
        <!-- header starts  -->
            <header>
                <div class="row">
                    <div class="col-lg-4 col-md-12">                   
                    <div class="logo-div">
                            <a href="#">
                                <img src="book.png"><!--logo add korar somoy logo ta ke hyper link er mnodde reke di bo  logo er class ta hobo ho fontweosome theke ni chi-->
                            </a>
                    </div>                 
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <p class="heading-style">Library Management System</p>
                    </div>
                </div>
            </header>
            <!-- header ends  -->   

    <center>
        <main>
        <table height=635 width=1080>
            
            <tr height=70>
                <td colspan="2"> 
                    <table width = "800">
                   
                    <tr>
                        <td style="visibility:hidden;">
                            hdhdhdhhfhhhhhhhhhhhhhhfhfjfjfjfh
                        </td>
                        
                        <td align="center">
                            <div class="card">
                        <h2>Logged in as || <?php echo $user['name'] ?></h2>
                            </div>  
                        </td> 
                        
                          
                    </tr>  
                   
                    </table>
                </td>
            </tr>
            
            <tr>
                <td rowspan="3" width="250">  
                <nav> 
                <ul>
                    <li> <a href="librarian_dashboard.php">Liabrarian Dashboard</a></li>										                  
                    <li> <a href="profile.php">Profile</a></li>
                    <li> <a href="catalog.php">Catalogue</a></li> 
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                    <li> <a href="account_setting.php">Account Settings</a></li>					  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>
               <form action="../views/changeprofileiccheck.php" method="POST" enctype="multipart/form-data"onsubmit="return validate()">
                      <fieldset>
                        <legend>PROFILE PICTURE</legend>
                        <?php while($viewbook = mysqli_fetch_assoc($result)){ ?>		
							
								
                                
               <img  height="200" width="200"src="upload/<?=$viewbook['image']?>">
               <br>
						
                            <?php 
                        }
                        ?>
                
                           <label for="imageInput">Select an image:</label>
            <input type="file" id="imageInput" name="image" value="" accept="image/jpeg, image/gif, image/png" >
            
      
        <span id="error" class="error"></span>
        <br>
                        <input type="submit" name="submit" value="Submit"/>
                     
                        
                            
                      </fieldset>
                </form>
                </td>
            </tr>
        </table>
         </main>

                <footer>
                     <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © by Jahidul Islam 2023</p>
                        </div>  
                    </div>                              
                </footer>
    </center>
    </div>
    </body>
</html>

