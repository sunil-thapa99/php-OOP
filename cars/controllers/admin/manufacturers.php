<!-- 
Un id: 17421492 
-->
<?php 
	// Create object and view template manufacturesViewTemplate
	$categoryObject = new DatabaseQueryTable($pdo, 'manufacturers');
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$templateDesignVariable = [
		'categoryObject' => $categoryObject
	];
	$mainContent = pageLoadTemplate('../views/admin/manufacturesViewTemplate.php', $templateDesignVariable);
?>
