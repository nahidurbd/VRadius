<!DOCTYPE html>
<html>
<head>
	<title>RADIUS Management Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS & JS library -->
	<link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
	<div class="container">
		<!-- Menubar -->
		<nav class="navbar navbar-static-top navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menubar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a class="navbar-brand" href="#">VRadius</a> -->
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="item"><a href="#">Home</a></li>
						<li class="item"><a href="#">User</a></li>
						<li class="item"><a href="#">Docs</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="item"><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Menubar for small screen -->
		<div class="col-xs-12 menubar-small-screen">
			<div class="small-menu-item">Home</div>
			<div class="small-menu-item">User</div>
			<div class="small-menu-item">Docs</div>
			<div class="small-menu-item">Login</div>
		</div>

		<!-- heading, sub-heading, and login -->
		<div class="col-xs-12 header">
			<div class="header-title">VRadius - Simple Yet Powerful RADIUS Manager</div>
			<div class="header-subtitle">
				VRadius is a simple RADIUS User Manager that can help Network Administrator
				maintain and monitor RADIUS Server on a network. With VRadius, you can do
				something basic like CRUD and create a graph of current network usage (MikroTik only).
				This project is open and still in development process. Fork me on GitHub if you are 
				interested about this project.
			</div>
		</div>

		<!-- Login and Other Action -->
		<div class="col-xs-6 action-section">
			<div class="action-title">Download Now</div>
			<div class="action-subtitle">
				The whole source code using PHP, JavaScript, and CSS. The whole source code full with
				comment and packed with PDF documentation.
			</div>
		</div>

		<div class="col-xs-6 action-section">
			<div class="action-title">Mind to Support</div>
			<div class="action-subtitle">
				If you are interested on this project, please help me develop vradius. I plan to add more
				feature like direct integration with RouterOS.
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</html>