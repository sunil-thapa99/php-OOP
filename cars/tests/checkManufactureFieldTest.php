<!-- 
	UN id: 17421492
 -->
<?php 
	// Load test script and check all the fields
	require 'script/checkManufactureField.php';
	class checkManufactureFieldTest extends \PHPUnit_Framework_TestCase{
		public function testManu1(){
			$manufacturer = [
				'name' => 'Tesla'	
			];
			$checker = checkFields($manufacturer);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testManu2(){
			$manufacturer = [
				'name' => ''	
			];
			$checker = checkFields($manufacturer);
			$this->assertTrue($checker);
			echo $checker;
		}
	}
?>