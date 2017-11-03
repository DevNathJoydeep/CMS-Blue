<div class="wow zoomIn">
<div class="menu">
	<div class="col-sm-2">
	<a href="../index.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			Home
		</div>
	</a>
	</div>
	<div class="col-sm-2">
	<a href="../includes/post.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			Post Article
		</div>
	</a>
	</div>
	<div class="col-sm-2">
	<a href="../admin/adminPanel.php">
		<div class="menuItem" style="text-decoration: none; color: white;">
			Admin Panel
		</div>
	</a>
	</div>
	<div class="col-sm-2">
	<a href="../includes/signup.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			Sign Up
		</div>
	</a>
	</div>
	<div class="col-sm-2">
	
	<?php if(!isset($_SESSION["username"])): ?>
	<a href="../includes/login.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			Log In
		</div>
	</a>
	<?php else: ?>
	<a href="../includes/logout.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			Log Out
		</div>
	</a>
	<?php endif; ?>
	</div>
	<div class="col-sm-2">
	<a href="../includes/about.php" >
		<div class="menuItem" style="text-decoration: none; color: white;">
			About Us
		</div>
	</a>
	</div>
</div>
</div>