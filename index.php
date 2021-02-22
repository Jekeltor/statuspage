<?php
require_once("config.php");

function getStatusBoxes($ip, $port, $manual, $name)
{
	if ($manual == "0") {
		$fp = fsockopen($ip, $port, $errornum, $errorstr, 1);
		if (!$fp) {
			echo "<div class='status offline'> <div class='server-name'>{$name}</div>";
			echo '<div class="">Offline <i class="fas fa-battery-empty"></i></div>';
		} elseif ($fp) {
			echo "<div class='status online'> <div class='server-name'>{$name}</div>";
			echo '<div class="server-status">Operational <i class="fas fa-battery-full"></i></div>';
		}
	} elseif ($manual == "1" or "2" or "3") {
		if ($manual == "1") {
			echo "<div class='status online'> <div class='server-name'>{$name}</div>";
			echo '<div class="server-status ">Operational <i class="fas fa-battery-full"></i></div>';
		} elseif ($manual == "2") {
			echo "<div class='status issues'> <div class='server-name'>{$name}</div>";
			echo '<div class="server-status ">Issues <i class="fas fa-battery-half"></i></div>';
		} elseif ($manual == "3") {
			echo "<div class='status offline'> <div class='server-name'>{$name}</div>";
			echo '<div class="server-status ">Offline <i class="fas fa-battery-empty"></i></div>';
		}
	}
	echo "</div>";
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Status - <?php echo $name ?></title>
	<link rel="icon" type="image/png" href="<?php echo $logo ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
	<meta name="theme-color" content="#084793">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:creator" content="@jekeltor" />
	<meta property="og:url" content="https://gfnrp.us" />
	<meta property="og:title" content="<?php echo $name ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:image" content="<?php echo $logo ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
	<script>
		window.onload = function() {
			setTimeout(function() {
				var loader = document.getElementById('loader');
				loader.classList.add("none");
			}, 1000);
		}
	</script>
	<style>
		.loader {
			height: 100vh;
			width: 100%;
			background-color: blue;
			position: absolute;
			z-index: 10;
		}

		.loader .loading {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 99;
		}

		.loader .loading:after {
			content: "";
			width: 8vh;
			height: 8vh;
			position: absolute;
			top: -30px;
			right: 0;
			left: 0;
			bottom: 0;
			margin: auto;
			border: 1vh solid #fff;
			border-top: 1vh dotted #fff;
			border-bottom: 1vh dotted #fff;
			border-radius: 50%;
			animation: loading 2s infinite;
		}

		.none {
			animation: .25s ease-in 0s 1 preloader;
			animation-fill-mode: forwards;
		}

		body {
			background: url("https://images.pexels.com/photos/532001/pexels-photo-532001.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260") no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			font-family: 'Inria Sans', sans-serif;
			margin: 0;
		}

		.announcement-container {
			width: 25%;
			background-color: #1C2035;
			padding: 8px 24px;
			margin: 40px auto;
			border-radius: 20px;
			color: white;
			word-wrap: wrap;
		}

		.announcement-container h1 {
			font-weight: 300;
			letter-spacing: 0.025em;
		}

		.status-container {
			width: 35%;
			background-color: rgba(47, 55, 118, 0.8);
			padding: 8px 24px;
			margin: 40px auto;
			border-radius: 20px;
		}

		.statuses {
			margin: 15px;
		}

		.statuses h1 {
			color: white;
			font-weight: 300;
			letter-spacing: 0.025em;
			font-size: 1.5rem;
		}

		.status {
			display: flex;
			justify-content: space-between;
			padding: 25px 20px;
			border-radius: 50px;
			margin-top: 15px;
			color: white;
		}

		.server-name {
			padding-left: 30px;
			font-size: 1.3rem;
			font-weight: 300;
			letter-spacing: 0.025em;
		}

		.server-status {
			padding-right: 30px;
			font-size: 1.1rem;
			font-weight: 100;
			letter-spacing: 0.025em;
		}

		@keyframes preloader {
			0% {
				visibility: visible;
				opacity: 1;
			}

			99% {
				visibility: hidden;
				opacity: 0;
				height: 100vh;
				width: 100%;
			}

			100% {
				height: 0vh;
				width: 0%;
				opacity: 0;
				display: none;
				z-index: -5;
			}
		}

		@keyframes loading {
			0% {
				transform: rotate(0);
			}

			50% {
				transform: rotate(360deg);
			}
		}

		@media screen and (max-width: 1300px),
		(orientation : portrait) {
			.announcement-container {
				width: 65%;
			}

			.status-container {
				width: 85%;
				padding: 8px 24px;
				margin: 0px auto;
				border-radius: 20px;
			}

			.statuses h1 {
				font-size: 1.5rem;
			}

			.server-name {
				padding-left: 30px;
				font-size: 1.3rem;
				font-weight: 300;
				letter-spacing: 0.025em;
			}

			.server-status {
				padding-right: 30px;
				font-size: 1rem;
				font-weight: 100;
				letter-spacing: 0.025em;
			}

			.status {
				padding: 20px 15px;
				margin-top: 15px;
			}

		}

		header {
			width: 100%;
			color: white;
			background-color: #2A2F45;
			padding: 15px 0;
		}

		header .header-content {
			width: 85%;
			margin: 0 auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		header h1 {
			font-weight: 300;
			letter-spacing: 0.025em;
			font-size: 1.5rem;
		}

		header a {
			font-weight: 300;
			letter-spacing: 0.025em;
			font-size: 1rem;
			color: white;
			text-decoration: none;

		}

		.online {
			background-color: #1ea100;
		}

		.offline {
			background-color: #cf0000;
		}

		.issues {
			background-color: #ff8400;
		}
	</style>
</head>

<body>
	<section class="loader" id="loader">
		<div class="loading">
		</div>
	</section>

	<header>
		<div class="header-content">
			<h1><?php echo $name ?></h1>
			<a href="<?php echo $domain; ?>">Back to Home Page</a>
		</div>
	</header>

	<section class="body">

		<?php if ($announcement !== "") { ?>
			<div class="announcement-container">
				<div class="announcement">
					<h1>Notification:</h1>
					<p><?php echo $announcement ?></p>
				</div>
			</div>
		<?php } ?>

		<div class="status-container">
			<div class="statuses">
				<h1><?php echo $name; ?>'s Server Statuses</h1>
				<?php foreach ($servers as $name => $information) {	?>
					<?php getStatusBoxes($information['IP'], $information['port'], $information['status'], $name) ?>
				<?php } ?>
			</div>
		</div>
	</section>
</body>

</html>