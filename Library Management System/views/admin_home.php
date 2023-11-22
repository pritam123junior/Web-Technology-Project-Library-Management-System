<?php
include_once("../controller/admin_homeCheck.php");
include_once("../controller/userData.php");
?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br />
	<a href="view_users.php">View Users</a>
	<br />
	<a href="ViewBook.php">Books</a>
	<br />
	<a href="TrendingBooks.php">Trending Book</a>
	<br />
	<a href="Notification.php">Send Notification</a>
	<br />
	<a href="../controller/logout.php">Logout</a>
</center>