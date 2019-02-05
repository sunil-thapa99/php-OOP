<!-- 
Un id: 17421492
 -->
<?php
	// Create object
	$personObject = new DatabaseQueryTable($pdo, 'account');
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	$templateDesignVariable = [
		'personObject' => $personObject
	];
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// Update record onto the database
		$_POST['passwordCredentials'] = password_hash($_POST['passwordCredentials'], PASSWORD_DEFAULT);
		if (isset($_GET['acid'])) {
			$personObject->save($_POST, 'account_id');			$mainContent = "Account has been modified";
		}
		else{
			// Store record onto the database
			$personObject->save($_POST);
			$mainContent = "Account has been created";
		}
	}
	// Delete record 
	if (isset($_GET['delAcid'])) {
		$personObject->deleteRecord('account_id', $_GET['delAcid']);
	}
	if (isset($_GET['acid'])) {
		if (isset($_GET['edit'])) {
			// Unset variables on URL
			unset($_GET['acid']);
			unset($_GET['edit']);
			header('location:account');
		}
		else{
			// Load form template
			$mainContent = pageLoadTemplate('../views/admin/createAccountForm.php', $templateDesignVariable);
		}
	}
	else{
		// Load view staff template
		$mainContent = pageLoadTemplate('../views/admin/viewStaff.php', $templateDesignVariable);
	}
?>