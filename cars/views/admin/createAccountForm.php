<!-- 
	UN id: 17421492
 -->
<?php 
	// Find all the staff records
	if (isset($_GET['acid'])) {
		$id = $_GET['acid'];
		$person = $personObject->findData('account_id', $id)->fetch();
	}
?>
<form method="POST" action="<?php if(isset($id)) echo 'account?acid='.$id.'&edit'; else echo 'account'; ?>">
	<input type="hidden" name="account_id" value="<?php if(isset($id)) echo $person['account_id']; ?>" required><br>
	<?php 
		if (isset($id)) {
			// Create form to update record
			$fields = [
				["First Name: ", "text", "userFirstName", 'value="'.$person['userFirstName'].'"'], ["SurName: ", "text", "userSurName", 'value="'.$person['userSurName'].'"'], ["Email: ", "email", "userEmail", 'value="'.$person['userEmail'].'"'], ["Username: ", "text", "usernameCredentials", 'value="'.$person['usernameCredentials'].'"']
			];
		}
		else{
			// Create form to add account
			$fields = [
				["First Name: ", "text", "userFirstName", ""], ["SurName: ", "text", "userSurName", ""], ["Email: ", "email", "userEmail", ""], ["Username: ", "text", "usernameCredentials", ""]
			];
		}
		form($fields);
		// If update, hide password
		if (isset($id)) {
			$type = "hidden";
			$value = $person['passwordCredentials'];
		}
		else{
			$type = "password";
			echo "<label>Password: </label>";
			$value = "";
		}
		echo '<input type="'.$type.'" name="passwordCredentials" value="'.$value.'" required><br>'
	?>
	<label>Select Gender</label>
	<select name="userGender">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	<label>Address: </label>
	<input type="text" name="userAddress" value="<?php if(isset($id)) echo $person['userAddress']; ?>" required>
	<input type="submit" name="submit" value="Add">
</form>