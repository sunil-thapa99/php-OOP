<!-- 
	UN id: 17421492
 -->
<?php 
	// Load test script and check entered password
	require 'script/passwordHash.php';
	class passwordHashTest extends \PHPUnit_Framework_TestCase{
		public function testPasswordEquality(){
			$password = 'claire123';
			$pass_hash = passwordChecker($password);
			$passwordReturn = password_verify($password, $pass_hash);
			$this->assertTrue($passwordReturn);
		} 
	}
?>