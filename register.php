<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jolites | Register</title>
	<?php
		require_once('header.php');
	?>
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit clearfix">
			<div class="pull-left span5">
				<h1><span>Register</span> @ Jolites</h1>
				<p>Exclusively for Jalpaiguri Government Engineering College students and faculty members.</p>
			</div>
		</div>
		<div align="justified">
			<h2>New User Registration</h2>
			<form method="post" action="registerjolites.php">
                <input type="text" name="name" placeholder="Name"/><br />
                <input type="email" name="email" placeholder="Email"/><br />
                <input name="uname" type="text" id="uname" placeholder="UserName"/><br />
                <select name="year" id="year"><?php for($y=2020;$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select><br />
                <select name="dept" id="dept"><option>CSE</option><option>ECE</option><option>CE</option><option>EE</option><option>IT</option><option>ME</option></select><br />
				<select name="usertype" id="dept"><option>Student</option><option>Faculty</option></select><br />
                <input class="btn" type="submit" value="Sign Up"/>     <a class="btn btn-primary" href="http://jeclat.in">Already Registered?</a>
			</form>
		</div>
		<?php require_once('foot.php'); ?>
	</body>
</html>