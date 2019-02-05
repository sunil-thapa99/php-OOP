<!-- 
Un id: 17421492
 -->
<?php 
	// Query cars and manufacturer
	$carObject = new DatabaseQueryTable($pdo, 'cars');
	$cars = $carObject->findData('manufacturerId', $_GET['id']);
	$manufactureObject = new DatabaseQueryTable($pdo, 'manufacturers');
	$manufactureCompany = $_GET['ob'];
	$templateDesignVariable = [
		'cars' => $cars,
		'manufactureObject' => $manufactureObject,
		'manufactureCompany' => $manufactureCompany
	];
	$className = "admin";
	$pageTitle = "Claires's Cars - ". $manufactureCompany;
	// Load car template
	$mainContent = 	pageLoadTemplate('../views/carViewTemplate.php', $templateDesignVariable);

?>
