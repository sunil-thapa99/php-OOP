<!-- 
	UN id: 17421492
 -->
<?php 
	// Check if manufacturing fields is empty or not
	function checkFields($fields){
		$emptyField = false;
		if($fields['name'] == ''){
			$emptyField = true;
		}
		return $emptyField;
	}
?>