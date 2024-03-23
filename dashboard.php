<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>

		<link rel="stylesheet" href="css/dashboard.css">


		<script src="js/dashboard.js"></script>



	</head>
	<body>
		<div class="header">
			<div class="logo">

				<span>Brand</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">

				<span> <?php echo $_SESSION['username']; ?></span>
			</div>
			<?php include("sidebar.php") ?>
		</div>
		<div class="main-content">
			<div class="title">
				Analytics
			</div>




			</div>
			<div class="main">



			</div>
		</div>
	</body>
</html>
