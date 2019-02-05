<!-- 
Un id: 17421492 
-->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$openingObject = new DatabaseQueryTable($pdo, 'opening_hrs');
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// Update opening hours
		$stmt = $openingObject->save($_POST, 'id');
		$mainContent = 'Opening hours have been modified';
	}
	else{ 
		// Create object and load template editOpeningHrsViewTemplate
		$templateDesignVariable = [
			'openingObject' => $openingObject
		];
		$mainContent = pageLoadTemplate('../views/admin/editOpeningHrsViewTemplate.php', $templateDesignVariable);
	}
 ?>
