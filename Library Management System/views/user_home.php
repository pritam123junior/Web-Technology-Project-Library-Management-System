<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<br />
	<a href="viewTrendingBook.php">Trending Books</a>
	<br />
	<a href="profile.php">Profile</a>
	<br />
	<a href="User_ViewBook.php">Books</a>
	<br />
	<a href="user_notification.php">Notification</a>
	
	<br/>
	<a href="AboutUs.php">AboutUs</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>