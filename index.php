<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jolites</title>
	<?php
		require_once('header.php');
	?>
		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit clearfix">
			<div class="pull-left span5">
				<h1><span>Welcome</span> to Jolites</h1>
				<p>Jalpaiguri Government Engineering College's Facebook</p>
				<p><a class="btn btn-info btn-large">Explore our blog</a></p>
			</div>
			<div class="pull-right">
				<form class="well" method="post" action="login.php">
					<label>Username</label>
					<input type="text" class="span3" placeholder="Type your username">
					<label>Password</label>
					<input type="password" class="span3" placeholder="Type your password">
					<label class="checkbox">
						<input type="checkbox">Remember me
					</label>
					<button type="submit" class="btn">Log me in</button>   <a class="btn btn-primary" href="comingsoon.html">Register</a>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="span4">
				<div class="thumbnail">
					<img alt="" src="img/thumb1.jpg">
					<div class="caption">
						<h5>Our Developer Team</h5>
						<p>The developers who made this possible.</p>
						<p><a class="btn btn-primary" href="comingsoon.html">The Team</a></p>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="thumbnail">
					<img alt="" src="img/thumb2.jpg">
					<div class="caption">
						<h5>Our Contributors</h5>
						<p>Jolites is backed up by a very strong and enthusiastic developers team who work to keep jolites afloat.</p>
						<p><a class="btn btn-primary" href="comingsoon.html">Be one of us</a> <a class="btn" href="comingsoon.html">See all our contributors</a></p>
					</div>
				</div>
			</div>
			<div class="span4">
				<a class="thumbnail" href="comingsoon.html">
				<img alt="" src="img/thumb3.jpg"></a>
				<h5>Contact Us!</h5>
			</div>
		</div>
		<?php require_once('foot.php'); ?>
	</body>
</html>