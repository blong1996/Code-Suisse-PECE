<?php

if (!$link = mysql_connect('107.180.55.9', 'newAdminUser', 'R00tP@ss')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('CAds-CS', $link)) {
    echo 'Could not select database';
    exit;
       
    
}

$sql    = 'SELECT * 
FROM Users WHERE user_id = 1';
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

mysql_free_result($result);

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Classified Ads 2.0 | My Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
<header id="header">
	<h1 id="logo"><a href="index.php">Classified Ads</a></h1>
	<nav id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="categories.php">Categories</a></li>
			<li><a href="my-account.php">My Account</a></li>
			<li><a href="create-ad.php">Create Ad</a></li>
			<li><a href="">Log Out</a></li>

		</ul>
	</nav>
</header>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<h2 id="h">My Account</h2>
			<br>
			<form method="post" action="#">
			<a href="admin.php" class="button">Admin Zone</a>
			<?php 
			
				$sql    = 'SELECT * 
				FROM Users 
				LEFT JOIN Locations ON Users.location_id = Locations.location_id 
				LEFT JOIN Regions ON Users.region_id = Regions.region_id
				WHERE user_id = 1';
				$result = mysql_query($sql, $link);
				
				if (!$result) {
				    echo "DB Error, could not query the database\n";
				    echo 'MySQL Error: ' . mysql_error();
				    exit;
				}
				while ($row = mysql_fetch_assoc($result)) {
					echo '<div class="field">
						First Name: <input type="text" name="fname" id="fname" value="'.$row['first_name']. '" required/>
					</div>
					<div class="field">
						Last Name: <input type="text" name="lname" id="lname" value="'.$row['last_name']. '" required/>
					</div>
					<div class="field">
						Email Address: <input type="email" name="email" id="email" value="' . $row['email']. '" required/>							
					</div>
					<div class="field">
						Phone Number: <input type="text" name="number" id="number" value="' . $row['phone_number']. '" />
					</div>
					<div class="field">
						Region: <input type="text" name="region" id="region" value="' . $row['region_fullname'] . '" required />
					</div>
					<div class="field">
						Location: <input type="text" name="location" id="location" value="' . $row['location_name'] .'" required/>
					</div>
					<div class="field">
						Password: <input type="password" name="pass" id="location" value="' . $row['password'] .'" required/>
					</div>';
				}
				mysql_free_result($result);
				
			?>
				<!-- Create your Save Changes -->
				<ul class="actions">
					<li><a href="index.php" class="button">Save</a></li>
				</ul>

				<div id="logoutModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							</div>
							<div class="modal-body">
								<p>Account settings Saved!</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
							</div>
						</div>

					</div>
				</div>

			</form>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">

		<p class="copyright">&copy; Proprietary East Coast Engineers | <a href="#">PECE@code-suisse.com</a> </p>

	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

	</body>
</html>