<!-- 
Un id: 17421492
 -->
<?php 
	// Creating object
	$careerObject = new DatabaseQueryTable($pdo, 'career');
	$pageTitle = "Claires's Cars - Admin";
	$className = "home";
	// Add details about career
	if (isset($_POST['addSub'])) {
		unset($_POST['addSub']);
		$stmt = $careerObject->save($_POST);
		echo '<script type="text/javascript">alert("Job has been added.")</script>';
	}
	$templateDesignVariable = [
		'careerObject' => $careerObject
	];
	// load career form template
	$mainContent = pageLoadTemplate('../views/admin/careerViewTemplate.php', $templateDesignVariable);
?>
