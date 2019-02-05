<!-- 
	UN id: 17421492
 -->
<?php 
	// Function to check whether car fields are empty or not
	function emptyFieldcar($car){
		$checker = false;
		if($car['name'] == ''){
			$checker = true;
		}
		elseif ($car['price'] == '') {
			$checker = true;
		}
		elseif ($car['manufacturerId'] == '') {
			$checker = true;
		}
		elseif($car['description'] == ''){
			$checker = true;
		}
		return $checker;
	}
?>