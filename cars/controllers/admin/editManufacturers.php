<!-- 
Un id: 17421492 
-->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$manufactureObject = new DatabaseQueryTable($pdo, 'manufacturers');
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// Update manufacturer
		$stmt = $manufactureObject->save($_POST, 'id');
		$mainContent = 'Manufacturer Edited';
	}
	else{ 
		// Load template editManufacturerViewTemplate
		$templateDesignVariable = [
			'manufactureObject' => $manufactureObject
		];
		$mainContent = pageLoadTemplate('../views/admin/editManufacturerViewTemplate.php', $templateDesignVariable);
	}
 ?>
