<?php require_once("../includes/functions.php"); ?>
<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>


		<div id="main">
			<div id="navigation">
				<h2 >  &nbsp </h2>
			</div>
			<div id="page">
				<h2> Admin Menu</h2>
				<p> Welcome to the admin area. <p>
				<ul>
					<li><a href ="manage_content.php"> Manage Website Content </a></li>
					<li><a href ="manage_admin.php"> Manage Admin Users</a></li>
					<li><a href ="logout.php"> Logout</a></li>
				</ul>
			</div>
		</div>

		<div id="footer"> Made in 2017</div>

	</body>
</html>
