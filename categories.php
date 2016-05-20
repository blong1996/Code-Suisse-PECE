<?php

if (!$link = mysql_connect('107.180.55.9', 'newAdminUser', 'R00tP@ss')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('CAds-CS', $link)) {
    echo 'Could not select database';
    exit;
}


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Classified Ads 2.0 | Categories </title>
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
	<h1 id="logo"><a href="index.php">Classified Ad 2.0</a></h1>
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
		<h2 class="h">Categories</h2>
		<section>


			<div class="row box alt" style="margin: 0 auto;">
				<?php
					$sql    = 'SELECT * FROM Categories';
					$result = mysql_query($sql, $link);
					
					if (!$result) {
					    echo "DB Error, could not query the database\n";
					    echo 'MySQL Error: ' . mysql_error();
					    exit;
					}
					
					while ($row = mysql_fetch_assoc($result)) {
					    echo '<div class=" tab col-lg-4 col-md-6 col-sm-6 col-xs-12  "><a href="category.php">
							<img class="image img-responsive" src="'. $row['cat_pic'] .'"></a>
							<p>' . $row['cat_name'].' </p>
						</div>';
					}
				?>
			

			</div>

		</section>



	</div>
</section>

<!-- Footer -->
<footer id="footer">
	<p class="copyright">&copy; Proprietary East-Coast Engineers | <a href="#">PECE@code-suisse.com</a> </p>
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