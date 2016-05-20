<!DOCTYPE HTML>

<html>
<head>
	<title>Classified Ads 2.0 | Admin Zone</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
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
	<div class="inner" style="text-align: right">
		<header class="major">
			<h2>Admin Zone</h2>
		</header>

		<!-- Content -->
		<div id="Admin" class="content" style="text-align: center">


			<div id="Admin" class="content" style="text-align: center">
				<h2><em>Total Users:</em></h2>
				<br>
				<p><strong>3</strong></p>
				<h2><em>Total Ads:</em></h2>
				<br>
				<p><strong>15</strong></p>

			</div>

			<hr />

			<h2>Categories</h2>
			<form method="post" action="#">

				<form>
					<br>
					<h3>Delete a Category:</h3>
					<select id="mySelect">
						<option>Vehicle</option>
						<option>Housing</option>
						<option>Goods</option>
						<option>Tickets</option>
						<option>Wanted</option>
						<option>Services</option>
						<option>Appliances</option>
						<option>Electronics</option>
					</select>
				</form>

				<button onclick="myFunction()">Remove selected Category</button>


				<script>
					function myFunction() {
						var x = document.getElementById("mySelect");
						x.remove(x.selectedIndex);
					}
				</script>


				<br>
				<br>
				<h3>Add New Categories:</h3>
				<div class="field">
					<input type="text" name="Location" id="Location" placeholder="New Category" />
				</div>

				<br>

				<ul class="actions">
					<button>Create Category</button>
				</ul>

			</form>
		</div>
		<hr />

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