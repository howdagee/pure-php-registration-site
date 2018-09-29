<!-- Start of Footer -->


<div id="Menu">
	<a href="index.php" title="Home Page">Home</a><br />
	<?php # Script 18.2 - footer.php
	// This page completes the HTML template.

	// Display links based upon the login status:
	if (isset($_SESSION['user_id'])) {

		echo '<a href="logout.php" title="Logout">Logout</a><br />
	<a href="change_password.php" title="Change Your Password">Change Password</a><br />
	';

		// Add links if the user is an administrator:
		if ($_SESSION['user_level'] == 2) {
			echo '<a href="view_users.php" title="View All Users">View Users</a><br />
		<a href="#">Some Admin Page</a><br />
		';
		}
	
	} else { //  Not logged in.
		echo '<a href="register.php" title="Register for the Site">Register</a><br />
	<a href="login.php" title="Login">Login</a><br />
	<a href="forgot_password.php" title="Password Retrieval">Retrieve Password</a><br />
	';
	}
	?>
	<a href="contact-us.php">Contact Us</a><br />
	<a href="#">Another Page</a><br />
</div><!-- Menu -->
</div><!-- Content -->
</body>
</html>
<?php // Flush the buffered output.
ob_end_flush();
?>