<!-- 
Un id: 17421492
 -->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$carObject = new DatabaseQueryTable($pdo, 'cars');
	// Update record to archive
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$detail = [
			'id' => $id,
			'archive' => 'Y'
		];
		$car = $carObject->save($detail, 'id');
		$mainContent = 'Car Archived';
	}
	// Update record to restore
	if (isset($_GET['res'])) {
		$id = $_GET['id'];
		$detail = [
			'id' => $id,
			'archive' => 'N'
		];
		$car = $carObject->save($detail, 'id');
		$mainContent = 'Car Archived';
	}
	$templateDesignVariable = [
		'carObject' => $carObject
	];
	$mainContent = pageLoadTemplate('../views/admin/archiveCarViewTemplate.php', $templateDesignVariable);
?>