<!-- 
	UN id: 17421492
 -->
<?php 
	$pathAdmin = false;
	if (isset($_SESSION) && isset($_SESSION['accountType'])) {
		// Check for admin in URL
		$checkDir = explode('/', $_SERVER['REQUEST_URI']);
		foreach ($checkDir as $key) {
			// If admin found, then load assests with respect to the admin directory
			if ($key == "admin") {
				$path = "../";
				$pathAdmin = true;
				break;
			}
			else{
				$path = "";
			}
		}
		$login = "Logout";
	}
	else{
		$path = "";
		$login = "Login";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $path; ?>../assests/css/styles.css"/>
		<?php 
			// Solve issue of assets for admin and visitors panel
			if (isset($_SESSION['accountType'])) {
				?>
					<link rel="stylesheet" href="<?php echo $path; ?>../assests/css/admin/style.css"/>
					<script type="text/javascript" src="<?php echo $path; ?>../assests/js/admin/main.js"></script>
				<?php
			}
		?>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<?php 
				// Load opening hrs content from database
					$currentMan = $openingObject->findAllData();
					foreach ($currentMan as $row) {
					echo '<p>'.$row['day'].': '.$row['time'].'</p>';
				}
				?>
			</aside>
			<img src="<?php echo $path; ?>../assests/images/logo.png"/>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="home">Home</a></li>
			<li><a href="cars">Showroom</a></li>
			<?php if ($pathAdmin) {
				// Create navigation for admin
				echo '<li><a href="openingHrs">Opening hours</a></li>';
			}
			else{
				echo '<li><a href="about">About Us</a></li>';
			}
			 ?>
			<li><a href="contact">Contact us</a></li>
			<li><a href="career">Claire’s Careers</a></li>
			<li><a href="<?php echo $path; ?>login"><?php echo $login; ?></a></li>
			<?php 
				// When admin views front end pages, dashboard link will navigate them to backend
				if (isset($_SESSION['accountType'])) {
					if ($pathAdmin) {
						$redirect = "";
					}
					else{
						$redirect = "admin/home";
					}
					if ($_SESSION['accountType'] == 'admin') {
						echo '
						<li><a href="account">Account</a></li>';
					}
					?>
					<li><a href="<?php echo $redirect; ?>">Dashboard</a></li>
				<?php
				}
			?>
		</ul>

	</nav>
	<!-- Path to load php file from admin or homepage -->
	<img src="<?php echo $path; ?>../assests/images/randombanner.php"/>
	<main class="<?php echo $className; ?>">
		<?php echo $mainContent; ?>
	</main>


	<footer>
		&copy; Claire's Cars 2018
	</footer>
</body>
</html>
