<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
<?php include("head.php");?>

		<div id="main">
			<div id="navigation">
				&nbsp;
			</div><!--#navigation-->
			<div id="page">
				<h2>Admin Menu</h2>
				<p>Welcome to the admin area <?php echo htmlentities($_SESSION["username"]); ?></p>
				<ul>
					<li><a href="manage_contact.php">Manage Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!--#page-->	
		</div><!--#main-->