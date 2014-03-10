<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jolites | Contact Us</title>
	<?php
		require_once('header.php');
	?>
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit clearfix">
			<div class="pull-left span5">
				<h1><span>Contact</span> Us</h1>
				<p>Share your ideas with Us</p>
			</div>
			<div class="pull-right">
				<img alt="" src="img/thumb3.jpg" width="500px" height="auto" />
			</div>
		</div>
		<form action="the php file link" method="post">
			Name : <input type="text" name="name" value=""><br/>
			Email : <input type="text" name="email" value=""><br/>
			Subject : <input type="text" name="subject" value=""><br/>
			Comment : <textarea name="comment"></textarea><br/>
			<button type="submit" name="submit" value="Submit">
		</form>
		<?php require_once('foot.php'); ?>
	</body>
</html>