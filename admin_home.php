<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Administration Platform (SAP)</title>
		<link rel="stylesheet" type="text/css" href="css/AA.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
	
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/252.jpg" class="imgs">
					<p class="para">
						School Administration Platform is a complete school management software designed to automate a school's diverse operations from classes, exams to school events calendar. 
					</p>
					
					<p class="para">
						This school software has a powerful online community to bring parents, teachers and students on a common interactive platform. It is a paperless office automation solution for today's modern schools. The School Management System provides the facility to carry out all day to day activities of the school.
					</p>
				</div>
				
			</div>
	
		<?php include"footer_admin.php";?>
	</body>
</html>