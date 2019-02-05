<!-- 
Un id: 17421492 
-->
<?php 
	// Delete car
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$manufactureObject = new DatabaseQueryTable($pdo, 'cars');
	$manufactureObject->deleteRecord('id', $_GET['id']);
	$mainContent = 'Car deleted';
?>