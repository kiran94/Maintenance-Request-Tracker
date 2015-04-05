<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Maintenance Request Tracker</title>

	<!-- meta -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- end meta -->

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<!-- end styles -->
</head>
<body>

	<!-- container -->
	<div class="container">
		
		<!-- title -->
		<div class="row">
			<div class="col-xs-12">
				<h1 id="title">Maintenance Requester</h1>
			</div>
		</div>
		<!-- end title -->

		<!-- action icons -->
		<div class="row">
			<div class="col-xs-3">
				<img src="res/img/new.png" id="newrequest" alt="newrequest" width="16px" height="16px" class="img-responsive action-icons"/>
			</div>

			<div class="col-xs-3">
				<img src="res/img/refresh.png" id="refresh" alt="refresh" width="16px" height="16px" class="img-responsive action-icons"/>
			</div>
		</div>
		<!-- end icons -->

		<!-- Requests Panel -->
		<div class="panel panel-success">

			<div class="panel-heading">
			 	Jobs
		  	</div>

			<div class="panel-body">
				<!-- requests table -->
				<div class="row">
					<div class="col-xs-12">
						<table id="requests" class="table table-condensed">
							<th>Date</th>
							<th>Label</th>
							<th>Room</th>
							<th>Building</th>
						</table>
					</div>
				</div>
				<!-- end table -->
			</div>

		</div>
		<!-- End Request Panel -->


		<div class="panel panel-success">

			<div class="panel-heading">
			 	Add Job
		  	</div>

			<div class="panel-body">

				<form>
					<div class="form-group">

						<!-- REQUEST LINE -->
					    <label for="reqlabel" class="col-sm-2 control-label">Request Description</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="reqlabel" placeholder="Description">
					    </div>
					    <!-- END REQUEST LINE -->
					 </div>

					 <br/>
					 <br/>

					 <!-- BUILDING FORM -->
					 <div class="col-xs-2">
					 	<label>Building</label>
					 </div>

					 <div class="col-xs-10">
					 	<select class="form-control" id="buildings"></select>
					 </div>
					 <!-- BUILDING FORM -->

				</form>

			</div>
		</div>


	
		<!-- FOOTER -->
		<div id='body-footer'>
			Developed By Kiran Patel<br/>
			View the <a href='https://github.com/kiran94/Maintenance-Request-Tracker'>project!</a>  
			<div>Icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
		</div>
		<!-- END FOOTER -->

	</div>
	<!-- end container -->

	<!-- scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="script/bootstrap.min.js"></script>
	<script type="text/javascript" src="script/loadRequests.js"></script>
	<script type="text/javascript" src="script/loadBuildings.js"></script>
	<!-- end scripts -->

</body>
</html>