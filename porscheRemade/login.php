<?php require_once("session.php"); ?>
<?php include("koneksi.php");?>
<?php require_once("functions.php"); ?>
<?php require_once("validation_functions.php"); ?>

<?php
$username = "";

	if(isset($_POST['submit'])){
		// Process the form
		
		// validations
		$required_fields = array("username","password");
		validate_presences($required_fields);
				
		if(empty($errors)){
			// Attempt Login
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			$found_admin = attempt_login($username, $password);
			
			if($found_admin){
				// Success
				// Mark user as logged in
				$_SESSION["admin_id"] = $found_admin["id"];
				$_SESSION["username"] = $found_admin["username"];
				redirect_to("admin.php");
			}else{
				// Failure
				$_SESSION["message"] = "Username/Password not found.";
			}
		}
	}else{
		// This is probably a GET request
		
	} // end: if(isset($_POST['submit']))
	
?>

<?php $layout_context = "admin"; ?>
<?php include("head.php");?>
<div id="main">
	<div id="navigation">
		&nbsp;
	</div><!--#navigation-->
	<div id="page">
		<?php echo message(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>Login</h2>
		<form action="login.php" method="post">
			<p>Username:
				<input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
			</p>
			<p>Password:
				<input type="password" name="password" value="" />
			</p>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</div><!--#page-->
</div><!--#main-->
