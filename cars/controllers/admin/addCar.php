<!-- 
Un id: 17421492
 -->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// Add car and multiple image to the database
		$carObject = new DatabaseQueryTable($pdo, 'cars');
		$_POST['account_id'] = $_SESSION['id'];
		$imageCounter = 1;
		for ($i=0; $i < count($_FILES['image']['name']); $i++) { 
			$imgTmpFile = $_FILES['image']['tmp_name'][$i];
			if ($imgTmpFile != '') {
				$fileName = $_POST['name']. $imageCounter . '.jpg';
				move_uploaded_file($imgTmpFile, '../assests/images/cars/' . $fileName);
				$imageCounter++;
			}
		}
		// Store image counter to keep track of image
		$_POST['imageCounter'] = $imageCounter;
		$stmt = $carObject->save($_POST);
		$mainContent = 'Car added';
	}
	else{ 
		// Load add car form
		$manufacturerObject = new DatabaseQueryTable($pdo, 'manufacturers');
		$templateDesignVariable = [
		'manufacturerObject' => $manufacturerObject
		];
		$mainContent = pageLoadTemplate('../views/admin/addCarViewTemplate.php', $templateDesignVariable);
	}
 ?>
