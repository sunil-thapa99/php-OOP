<!-- 
	UN id: 17421492
 -->
<?php 
	// Start session and load all the pages required
	session_start();
	require '../databaseConnect/connectToDatabase.php';
	require '../functions/page-template-load-function.php';
	require '../functions/generate-table-function.php';
	require '../models/databaseQuery.php';
	require '../functions/form-template-function.php';
	$openingObject = new DatabaseQueryTable($pdo, 'opening_hrs');
	// Check if URL contains admin
	$checkDir = explode('/', $_SERVER['REQUEST_URI']);
	foreach ($checkDir as $key) {
		if ($key == "admin") {
			// Check if admin dashboard has correct log in
			if (!isset($_SESSION['accountType'])) {
				header('location:../home');
			} 
		}
	}
	// Get page name to load
	if (isset($_GET['pagePhase'])) {
		$pagePhase = $_GET['pagePhase'];
	}
	else{
		$pagePhase = "home";
		$className = "home";
	}
	// Get page from controllers
	require '../controllers/'.$pagePhase.'.php';
	$templateDesignVariable = [
		'pageTitle' => $pageTitle,
		'className' => $className,
		'mainContent' => $mainContent,
		'openingObject' => $openingObject
	];
	// Load layout template
	$displayHTML = pageLoadTemplate('../views/overall-Layout.php', $templateDesignVariable);
	echo $displayHTML;
?>