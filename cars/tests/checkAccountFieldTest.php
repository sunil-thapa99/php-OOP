<!-- 
	UN id: 17421492
 -->
<?php 
	// Load test script and check each field through functions
	require 'script/checkAccountField.php';
	class checkAccountFieldTest extends \PHPUnit_Framework_TestCase{
		public function testFirstName(){
			$firstName = [
				'userFirstName' => '',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($firstName);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testSurName(){
			$surname = [
				'userFirstName' => 'Claire',
				'userSurName' => '',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($surname);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testEmail(){
			$email = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => '',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($email);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testUsername(){
			$username = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => '',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($username);
			$this->assertTrue($checker);
			echo $checker;
		}
	public function testPassword(){
			$password = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => '',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($password);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testGender(){
			$gender = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => '',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($gender);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testAddress(){
			$address = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => ''	
			];
			$checker = emptyFieldAccount($address);
			$this->assertTrue($checker);
			echo $checker;
		}
		public function testFull(){
			$allField = [
				'userFirstName' => 'Claire',
				'userSurName' => 'Smith',
				'userEmail' => 'claire.smith@gmail.com',
				'usernameCredentials' => 'claire.smith',
				'passwordCredentials' => 'claire123',
				'userGender' => 'Female',
				'userAddress' => 'Northampton'	
			];
			$checker = emptyFieldAccount($allField);
			$this->assertTrue($checker);
			echo $checker;
		}
	}
?>