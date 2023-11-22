<?php
include_once("../controller/loginCheck.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $userid = $_POST["id"];
    
    // Store the user input in a session variable
    $_SESSION["id"] = $userid;
    
    // Redirect to a page to display the result
 
    exit;
}
?>


<center>
	<form action="" method="POST" enctype="">
		<table border=" 0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>LOGIN</h3>
						</legend>
						User Id<br />
						<input type="text" name="id" value="<?php echo $id ?>" /><br />
						Password<br />
						<input type="password" name="password" value="<?php echo $password ?>" />
						<br />
						<hr />
						<input type="submit" value="Login" name="submit">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>