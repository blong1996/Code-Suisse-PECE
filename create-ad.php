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
		<title>Classified Ads 2.0 | Create New Ad</title>
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

		<section id="main" class="wrapper">
				<div class="inner">
					<header class="major">
						<h2 id="">Create New Ad</h2>

                        <!-- Form to create your advertisement-->
                        <hr />
                        <form method="post" action="#">
                            <div class="field">
                              Ad Header: <input type="text" name="name" id="name" placeholder="" />
                            </div>
                            <div class="field">
                                <div class="select-wrapper">
                                   Category:  <select name="Category" id="category" placeholder="Category">
                                    <?php 
                                      $sql    = 'SELECT * 
						FROM Categories';
						$result = mysql_query($sql, $link);
						
						if (!$result) {
						    echo "DB Error, could not query the database\n";
						    echo 'MySQL Error: ' . mysql_error();
						    exit;
						}
						
						while ($row = mysql_fetch_assoc($result)) {
						    echo ' Category: <option>' . $row['cat_name'] . '</option> ';
						
						}
						mysql_free_result($result);
                                    ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="field">
                                <div class="select-wrapper">
                                   Region: <select name="Region" id="region" placeholder="Region">
                                    <?php 
                                      $sql    = 'SELECT * 
						FROM Regions';
						$result = mysql_query($sql, $link);
						
						if (!$result) {
						    echo "DB Error, could not query the database\n";
						    echo 'MySQL Error: ' . mysql_error();
						    exit;
						}
						
						while ($row = mysql_fetch_assoc($result)) {
						    echo ' Category: <option>' . $row['region_fullname'] . '</option> ';
						
						}
						mysql_free_result($result);
                                    ?>
                                    </select>
                                    
                                </div>
                            </div>
                            
                            <div class="field">
                                <div class="select-wrapper">
                                    Location: <select name="Region" id="location" placeholder="Location">
                                    <?php 
                                      $sql    = 'SELECT * 
						FROM Locations WHERE region_id = 2';
						$result = mysql_query($sql, $link);
						
						if (!$result) {
						    echo "DB Error, could not query the database\n";
						    echo 'MySQL Error: ' . mysql_error();
						    exit;
						}
						
						while ($row = mysql_fetch_assoc($result)) {
						    echo ' Location: <option>' . $row['location_name'] . '</option> ';
						
						}
						mysql_free_result($result);
                                    ?>
                                    </select>
                                    
                                </div>
                            </div>
                             <div class="field">
                               Description:  <textarea name="message" id="message" placeholder="" rows="4"></textarea>
                            </div>
                            <div>
                            <p>Select image to upload:</p>
    				<input type="file" name="fileToUpload" id="fileToUpload">
    				</div>
    				<br>
                            <!-- Create your ad button -->
                            <ul class="actions">
                                <li><a href="index.php" class="button">Create Ad</a></li>
                            </ul>

                        </form>
                        <hr />
                    </header>

					

		<!-- Footer -->
			<footer id="footer">
				
				<p class="copyright">&copy; Proprietary East Coast Engineers| <a href="#">PECE@code-suisse.com</a> |&copy; Proprietary East Coast Engineers| <a href="#">PECE@code-suisse.com</a> </p>
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