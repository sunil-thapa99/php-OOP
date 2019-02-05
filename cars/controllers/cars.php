<!-- 
Un id: 17421492
 -->
<?php 
	// Provided code that queries cars and display 10 records
	$cars = $pdo->query('SELECT * FROM cars LIMIT 10');
	$manufactureObject = new DatabaseQueryTable($pdo, 'manufacturers');

	$templateDesignVariable = [
		'cars' => $cars,
		'manufactureObject' => $manufactureObject
	];
	$className = "admin";
	$pageTitle = "Claires's Cars - Our Cars";
	// Load car template
	$mainContent = 	pageLoadTemplate('../views/carViewTemplate.php', $templateDesignVariable);

?>
