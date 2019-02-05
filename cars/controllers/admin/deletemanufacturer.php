<!-- 
Un id: 17421492 
-->
<?php 
	// Delete manufacturing company
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$manufactureObject = new DatabaseQueryTable($pdo, 'manufacturers');
	$manufactureObject->deleteRecord('id', $_GET['id']);
	$mainContent = 'Manufacturer deleted';
?>