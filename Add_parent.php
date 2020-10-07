<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SAP</title>
		<link rel="stylesheet" type="text/css" href="css/SSS.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Parent Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into parent(PNAME,PPASS) values('{$_POST["name"]}',1234)";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Parent Name</label><br>
					     <input type="text" name="name" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Parent Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
				<?php include"footer_admin.php";?>
	</body>
</html>