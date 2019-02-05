<!-- 
Un id: 17421492 
-->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	// Create object
	$carObject = new DatabaseQueryTable($pdo, 'cars');
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// Query car 
		$car = $carObject->findData('id', $_POST['id'])->fetch();
		// Check if old and new prices are same
		if($car['price'] != $_POST['price']){
			$_POST['oldPrice'] = $car['price'];
		}
		// Load images
		$imageCounter = $car['imageCounter'];
		for ($i=0; $i < count($_FILES['image']['name']); $i++) { 
			$imgTmpFile = $_FILES['image']['tmp_name'][$i];
			if ($imgTmpFile != '') {
				$fileName = $_POST['name']. $imageCounter . '.jpg';
				move_uploaded_file($imgTmpFile, '../assests/images/cars/' . $fileName);
				$imageCounter++;
			}
		}
		$_POST['imageCounter'] = $imageCounter;
		// Update car
		$stmt = $carObject->save($_POST, 'id');
		$mainContent = 'Product saved';
	}
	else{ 
		// Create object and load template editCarViewTemplate
		$manufacturerObject = new DatabaseQueryTable($pdo, 'manufacturers');
		$templateDesignVariable = [
			'carObject' => $carObject,
			'manufacturerObject' => $manufacturerObject
		];
		$mainContent = pageLoadTemplate('../views/admin/editCarViewTemplate.php', $templateDesignVariable);
	}
 ?>
