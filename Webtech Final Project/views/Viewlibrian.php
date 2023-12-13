<?php
  require_once('../models/function.php');
  require_once('../models/db.php');
  $viewlibrian = getviewlibrian();
?>

<!DOCTYPE html>
<html>
<head> 
    <script src="../Assests/librian.js"></script>
    <title>Librian Database</title>

    <script>

          function validateForm2(){
            var Librian_ID = document.getElementsByName("Librianid")[0].value;
            if (Librian_ID === "") {
                alert("You have to enter Librian ID");
                return false;
            }
            return true;
        }


        function validateForm() {
            var Librian_ID = document.getElementsByName("Librianid")[0].value;
            var Librian_Name = document.getElementsByName("Librianname")[0].value;
            var Librian_Email = document.getElementsByName("Librianemail")[0].value;
            var Contact_Number = document.getElementsByName("Contactnumber")[0].value;
            var Assigned_Role = document.getElementsByName("Assignedrole")[0].value;
            
            

          

            // Validate Librian_Name
            if (Librian_Name === "") {
                alert("Please enter Librian Name");
                return false;
            }

            // Validate Librian_Email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (Librian_Email === "" || !emailRegex.test(Librian_Email)) {
                alert("Please enter a valid email address");
                return false;
            }
           

            // Validate Contact_Number
            if (Contact_Number === "" || isNaN(Contact_Number) || !Number.isInteger(parseFloat(Contact_Number))) {
                alert("Please enter a valid integer for Contact Number");
                return false;
            }

            // Validate Assigned_Role
            if (Assigned_Role === "") {
                alert("Please Assigned The Role");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

<table border="3" style="width:80%; max-width:600px; margin:auto;" cellspacing="1" cellpadding="5">

    <tr>
        <th colspan="5"><h2><b>Librian Details</b></h2></th>
    </tr>
  
    <tr>
        <td>Librian ID</td>
        <td>Librian Name</td>
        <td>Librian Email</td>
        <td>Contact Number</td>
        <td>Assigned Role</td>
    </tr>
    
    <?php for ($i = 0; $i < count($viewlibrian); $i++) { ?>
        <tr>
            <td><?=$viewlibrian[$i]['Librian_ID']?></td>
            <td><?=$viewlibrian[$i]['Librian_Name']?></td>
            <td><?=$viewlibrian[$i]['Librian_Email']?></td>
            <td><?=$viewlibrian[$i]['Contact_Number']?></td>
            <td><?=$viewlibrian[$i]['Assigned_Role']?></td>
        </tr>  
    <?php } ?>

    <tr>
        <td colspan="5" align="center"><a href="admin_home.php">Go Home</a></td>
    </tr>
    <tr>
        <td colspan="5" align="center">
            <input type="button" name="add" id="adding" value="Add Librian" onclick="addlibrian()" />
            <input type="button" name="update" id="updating" value="Update Librian" onclick="updatelibrian()" />
            <input type="button" name="delete" id="deleting" value="Delete Librian" onclick="deletelibrian()" />

            <p id="add"></p> 
            <p id="update"></p>
            <p id="delete"></p>

        </td>
    </tr>
</table>

</body>
</html>
