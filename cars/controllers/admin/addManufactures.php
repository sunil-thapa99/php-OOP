<!-- 
Un id: 17421492
 -->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	if (isset($_POST['submit'])) {
		// Store manufacturer details to the database
		$manufactureObject = new DatabaseQueryTable($pdo, 'manufacturers');
		unset($_POST['submit']);
		$stmt = $manufactureObject->save($_POST);
		$mainContent = 'Manufacturer added';
	}
	else{ 
		// Load manufacturer add form template
	$mainContent = pageLoadTemplate('../views/admin/addManufactureViewTemplate.php', []);
	}
 ?>
