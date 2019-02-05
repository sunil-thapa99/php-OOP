<!-- 
Un id: 17421492
 -->
<?php
	// Create object 
	$enquiryObject = new DatabaseQueryTable($pdo, 'enquiry');
	$personObject = new DatabaseQueryTable($pdo, 'account');
	if (isset($_POST['status'])) {
		// Change status of the forum
		$staff_id = $_SESSION['id'];
		$_POST['staff_id'] = $staff_id;
		$stmt = $enquiryObject->save($_POST, 'enquiry_id');
	}
	// View all the enquiry
	$enquiryObject = $enquiryObject->findAllData();
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$templateDesignVariable = [
		'enquiryObject' => $enquiryObject,
		'personObject' => $personObject
	];
	// Load contact template
	$mainContent = pageLoadTemplate('../views/admin/contactViewTemplate.php', $templateDesignVariable);
?>