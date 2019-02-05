<!-- 
	UN id: 17421492
 -->
<div class="tab">
	<h2>Staff</h2>
	<ul>
		<li><a href="createAccount">Add Staff</a></li>
		<li><a href="account">View Account</a></li>
	</ul>
</div>
<?php
// Generate table to show staff details
	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['Staff Id', 'First Name', 'SurName', 'Email', 'Account Type', 'Edit', 'Delete']);
	$person = $personObject->findAllData();
	while($staff = $person->fetch(PDO::FETCH_ASSOC)){
		// View staff details along with edit, delete options
		$editStaff = '<a href="account?acid=' . $staff['account_id'] . '">Edit</a>';
		$removeStaff = '<a href="account?delAcid=' . $staff['account_id'] . '" onclick="return confirm(\'Do you wanna delete this account?\')">Delete Record</a>';
		array_push($staff, $editStaff, $removeStaff);
		unset($staff['usernameCredentials']);
		unset($staff['passwordCredentials']);
		unset($staff['userGender']);
		unset($staff['userAddress']);
		$tableDisplay->setDataOnRow($staff);
	
	}
	echo $tableDisplay->getterHTML();
?>