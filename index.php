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
	<title>Classified Ads 2.0 | Home </title>
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
	<h1 id="logo"><a href="index.php">Classified Ads 2.0</a></h1>
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


		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="major">
						<h2>Ads You Might Like</h2>
						<p>These ads are recommended for you based on your subscriptions.</p>
					</header>
					<div class="posts">
					
					<?php 
					
					$sql    = 'SELECT * 
						FROM Ads
						LEFT JOIN Subscriptions ON Ads.cat_id = Subscriptions.cat_id
						WHERE Subscriptions.user_id =1';
						$result = mysql_query($sql, $link);
						
						if (!$result) {
						    echo "DB Error, could not query the database\n";
						    echo 'MySQL Error: ' . mysql_error();
						    exit;
						}
						
						while ($row = mysql_fetch_assoc($result)) {
						    echo '<section class="post">
						    <a href="ad.php" class="image"><img src="'. $row["ad_image"]. '" alt="" /></a>
						    <div class="content">
						    	<h3> '. $row["ad_header"]. '</h3>
							<p>' . $row["ad_description"] . '</p>
							</div>
						</section>';
						}
						mysql_free_result($result);
											
					?>
						
					</div>
				</div>
			</section>

		<!-- Footer-->
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