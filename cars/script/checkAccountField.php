<!-- 
	UN id: 17421492
 -->
<?php 
	// Function to check where fields of account are empty or not
	function emptyFieldAccount($account){
		$checker = false;
		if($account['userFirstName'] == ''){
			$checker = true;
		}
		elseif ($account['userSurName'] == '') {
			$checker = true;
		}
		elseif($account['userEmail'] == ''){
			$checker = true;
		}
		elseif ($account['usernameCredentials'] == '') {
			$checker = true;
		}
		elseif($account['passwordCredentials'] == ''){
			$checker = true;
		}
		elseif ($account['userGender'] == '') {
			$checker = true;
		}
		elseif($account['userAddress'] == ''){
			$checker = true;	
		}
		return $checker;
	}
?>