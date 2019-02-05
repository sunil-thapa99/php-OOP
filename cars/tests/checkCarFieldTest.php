<!-- 
	UN id: 17421492
 -->
<?php 
	// Load test script and check all the fields 
	require 'script/checkCarField.php';
	class checkCarFieldTest extends \PHPUnit_Framework_TestCase{
		public function testCarName(){
			$name = [
				'name' => '',
				'price' => '15000',
				'manufacturerId' => 1,
				'description' => 'Made in 1996, available in green and black.'
			];
			$checker = emptyFieldcar($name);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testPrice(){
			$price = [
				'name' => 'Jaguar XJS',
				'price' => '',
				'manufacturerId' => 1,
				'description' => 'Made in 1996, available in green and black.'	
			];
			$checker = emptyFieldcar($price);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testManufacture(){
			$manufacturerId = [
				'name' => 'Jaguar XJS',
				'price' => '15000',
				'manufacturerId' => '',
				'description' => 'Made in 1996, available in green and black.'
			];
			$checker = emptyFieldcar($manufacturerId);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testDescript(){
			$description = [
				'name' => 'Jaguar XJS',
				'price' => '15000',
				'manufacturerId' => 1,
				'description' => ''
			];
			$checker = emptyFieldcar($description);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testAll(){
			$description = [
				'name' => 'Jaguar XJS',
				'price' => '15000',
				'manufacturerId' => 1,
				'description' => 'Made in 1996, available in green and black.'
			];
			$checker = emptyFieldcar($description);
			$this->assertTrue($checker);
			echo $checker;
		}
	}
?>