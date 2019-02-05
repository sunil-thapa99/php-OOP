<!-- 
	UN id: 17421492
 -->
<?php 
	// Return hashed password
	function passwordChecker($password){
		$pass_hash = password_hash($password, PASSWORD_DEFAULT);
		return $pass_hash;
	}
?>