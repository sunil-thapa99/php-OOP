<!-- 
Un id: 17421492
 -->
<?php 
	// Display alert stating thanks
	if (isset($_GET['id'])) {
		echo '<script type="text/javascript">alert("Thanks for your interest.")</script>';
	}
	$careerObject = new DatabaseQueryTable($pdo, 'career');
	$templateDesignVariable = [
		'careerObject' => $careerObject,
	];
	$className = "home";
	$pageTitle = "Claires's Cars - Career";
	// Load career template and send array $templateDesignVariable
	$mainContent = 	pageLoadTemplate('../views/careerViewTemplate.php', $templateDesignVariable);
?>
