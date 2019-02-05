<!-- 
Un id: 17421492 
=> claire.smith   claire123
=> fred.clark    fred123

 -->
<?php 
	// Create object
	$personObject = new DatabaseQueryTable($pdo, 'account');
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	if (isset($_POST['submit'])) {
		// Add account to the database
		unset($_POST['submit']);
		$_POST['passwordCredentials'] = password_hash($_POST['passwordCredentials'], PASSWORD_DEFAULT);
		$personObject->save($_POST);
		$mainContent = "Account has been created";
	}
	else{
		$templateDesignVariable = [
			'personObject' => $personObject
		];
		// Load template
		$mainContent = pageLoadTemplate('../views/admin/createAccountForm.php', $templateDesignVariable);
	}
?>