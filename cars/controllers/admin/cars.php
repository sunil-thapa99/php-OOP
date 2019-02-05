<!-- 
Un id: 17421492
 -->
<?php 
	// Creating object
	$categoryObject = new DatabaseQueryTable($pdo, 'cars');
	$personObject = new DatabaseQueryTable($pdo, 'account');
	$categoryObject = $categoryObject->findAllData();
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$templateDesignVariable = [
		'categoryObject' => $categoryObject,
		'personObject' => $personObject
	];
	// Load cars template
	$mainContent = pageLoadTemplate('../views/admin/carsViewTemplate.php', $templateDesignVariable);
?>