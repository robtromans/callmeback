<?php require dirname(dirname(__FILE__)) . '/callmeback/inc/Security.php'; ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sample Call Me Back page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/jumbotron-narrow.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li class="active"><a href="#">PHP Demo</a></li>
				<li><a href="demo2.html">HTML Demo</a></li>
				<li><a href="demo3.php">Plain Form Demo</a></li>
			</ul>
			<h3 class="text-muted">Call Me Back Demo Page</h3>
		</div>

		<div class="jumbotron">

			<!-- Hidden message boxes -->
			<div id="success" class="alert alert-success"></div>

			<div id="error" class="alert alert-danger">
				<p>The following errors occurred</p>
				<ul class="error_list"></ul>
			</div>


			<form name="" id="callmeback_form" class="form-horizontal" role="form" action="../callmeback/" method="post">

				<div class="form-group">
					<label for="inputName" class="col-lg-2 control-label">Name</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
					</div>
				</div>

				<div class="form-group">
					<label for="inputNumber" class="col-lg-2 control-label">Number</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="number" id="number" placeholder="Phone Number">
					</div>
				</div>

				<div class="form-group">
					<label for="inputTime" class="col-lg-2 control-label">Time</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="time" id="time" placeholder="Call me back at">
					</div>
				</div>

				<div class="form-group">
					<label for="inputCaptcha" class="col-lg-2 control-label"></label>
					<div class="col-lg-9">
						<!-- Display human readable captcha -->
						<span class="text-muted"><?php print Callmeback_Security::generateCaptchaQuestion(); ?></span>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="inputCaptcha" placeholder="Answer" name="captcha" value="" />
						</div>
					</div>

					<!-- Hidden bot protection field -->
					<input type="text" name="bot" id="bot" style="display: none;"  />

					<!-- Hidden CSRF field to prevent external usage -->
					<input type="hidden" name="csrf" value="<?php print Callmeback_Security::generateCsrf(); ?>" />
				</div>

				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" id="submit" class="btn btn-default">Submit</button>
					</div>
				</div>

			</form>
		</div>

		<div class="footer">
			<p>&copy; My website 2014</p>
		</div>
	</div>




	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/callmeback.ajax.js"></script>
</body>
</html>