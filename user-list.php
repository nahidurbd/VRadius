<!DOCTYPE html>
<html>
<head>
	<title>RADIUS Management Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS & JS library -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href="style.css" rel="stylesheet" />
</head>
<body>
	<!-- Add User Modal -->
	<div id="addUserModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span class="modal-title">Add User</span>
					<span data-dismiss="modal" class="close-modal">&times;</span>
				</div>
				<div class="modal-body">
					<form action="add.php" method="POST">
						<span class="input-group"><span class="modal-trigger-button input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input name="username" type="text" placeholder="Username" class="form-input form-control" /></span>
						<span class="input-group"><span class="modal-trigger-button input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input name="password" type="password" placeholder="Password" class="form-input form-control" /></span>
						<button type="submit" class="btn btn-register btn-primary btn-block">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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

		<?php
		include 'database.php';
		$sql	= "SELECT id, username, attribute, value FROM radcheck";
		$query 	= mysqli_query($conn, $sql);
		?>

		<div class="col-xs-12 section-title">
			<span class="left-aligned">RADIUS User List</span>
			<span class="section-version-mark">
				<span class="input-group">
					<span class="input-group-addon" data-toggle="modal" data-target="#addUserModal"><span class="glyphicon glyphicon-plus"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-download"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
					<input type="text" placeholder="Search user" class="form-control" />
				</span>
			</span>
		</div>

		<table class="table table-bordered table-striped table-responsive table-data">
			<thead>
				<tr>
					<td>ID</td>
					<td>Username</td>
					<td>Attribute</td>
					<td>Password</td>
					<td>Action</td>
				</tr>
			</thead>

			<tbody>
				<?php while ($row = mysqli_fetch_assoc($query)) { ?>
					<form action="delete.php" method="POST">
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['attribute']; ?></td>
							<td><?php echo $row['value']; ?></td>
							<input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
							<td><button data-index="<?php echo $row['id']; ?>" type="submit" class="btn btn-danger delete-data">Delete</button></td>
						</tr>
					</form>
					<?php } ?>
				</tbody>
			</table>
		</body>
		</html>