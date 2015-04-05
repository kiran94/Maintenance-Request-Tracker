<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Maintenance Request Tracker</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>

	<!-- CONTAINER -->
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				<h1 id='title'>Maintenance Requester</h1>
			</div>
		</div>


		<?php
			require_once "error.php"; 
			require_once "Connect.php"; 

			$connect = new Connect(); 
			$connect->getConnection(); 
			
		?>











		<!-- FOOTER -->
		<div id='body-footer'>
			Developed By Kiran Patel<br/>
			View the <a href='https://github.com/kiran94/Maintenance-Request-Tracker'>project!</a>  
		</div>
		<!-- END FOOTER -->


	<!-- END CONTAINER -->
	</div>


	<!-- Need jquery -->
	<script type="text/javascript" src="script/bootstrap.min.js"></script>
</body>
</html>