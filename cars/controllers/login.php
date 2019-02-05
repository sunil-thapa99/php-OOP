<!-- 
Un id: 17421492 
=> claire.smith   claire123
=> fred.clark    fred123
=> sunil43thapa		sunil123
 -->
<?php 
	if(!isset($_POST['submit'])){
		// Logout system
		if (isset($_SESSION['accountType'])) {
			session_start();
			session_unset();
			session_destroy();
			header('location:login');
		}
		else{
			// Load login page
			$className = "home";
			$pageTitle = "Claires's Cars - Login";
			$mainContent = 	pageLoadTemplate('../views/loginViewTemplate.php', []);
		}
	}
	else{
		session_start();
		$checkLogin = false;
		unset($_POST['submit']);
		$credentials = $_POST;
		$loginObject = new DatabaseQueryTable($pdo, 'account');
		// Find inserted record on database
		$returnRow = $loginObject->findData('usernameCredentials', $credentials['usernameCredentials']);
		if($returnRow->rowCount() > 0){
			foreach ($returnRow as $key) {
				// Check if logged user is admin or staff
				if ($key['accountType'] == 'admin') {
					$_SESSION['accountType'] = "admin";
				}
				else{
					$_SESSION['accountType'] = "staff";
				}
				// Check entered password
				if (password_verify($_POST['passwordCredentials'], $key['passwordCredentials'])) {
					$_SESSION['id'] = $key['account_id'];
					header('location:../public/admin/home');
				}
				else{
					$error = "!!!No Password Match!!!";
					$checkLogin = true;
				}
			}
			
		}
		else{
			$error = "!!!No Account Exists!!!";
			$checkLogin = true;
		}
		if ($checkLogin == true) {
			echo '<script type="text/javascript">alert("'.$error.'Login Unsuccessful!!!")</script>';
			header('Refresh:0');
		}
	}
	
?>
