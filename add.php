<!DOCTYPE HTML>
<?php include('connectdb.php'); 
session_start();
if($_SESSION['stats'] == 0){
    header('Location: admin.php');
    echo $_SESSION['stats'];
}
if(isset($_POST['submit'])){
    $_SESSION['stats'] = 0;
    header('Location: admin.php');
}
?>
<html>
    <head>
        <title>Rajasthan Tourism</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="landing">
        <div id="page-wrapper">
				<header id="header" class="alt">
					<h1><a href="index.php">Rajasthan Tourism</a> <?php echo ' by Preetam Daila' ?></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="city.php?city=-1">Place</a></li>
							<li><a href="about.php" class="icon fa-angle-down"> About</a>
							    <ul>
							        <li><a href="about.php">Rajasthan</a></li>
							    </ul>
							</li>
							<li>
								<a href="add.php" class="icon fa-angle-down">Add</a>
								<ul>
								    <li><a href="addcity.php">Add City</a></li>
								    <li><a href="addplace.php">Add Place</a></li>
                                </ul>
				            </li>
						</ul>
					</nav>
				</header>
              
              <section id="cta">

					<h2>Add</h2>
					<p></p>

					<form method="post" action="" enctype="multipart/form-data">
						<div class="row uniform 50%">
							<div class="12u 12u(mobilep)">
                                <a href="addcity.php"><input type="button" name="addcity" value="Add City" class="fit" /></a>
							</div>
							<div class="12u 12u(mobilep)">
                                <a href="addplace.php"><input type="button" name="addplace" value="Add Place" class="fit" /></a>
							</div>
							<div class="12u 12u(mobilep)">
                                <input type="submit" name="submit" value="Log Out" class="fit" />
							</div>
						</div>
					</form>

				</section>
              
               
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; All rights reserved.</li><li>Design: <a href="https://github.com/sahilrox95">Sahil Singh</a></li>
					</ul>
				</footer>
        </div>
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
    </body>
</html>