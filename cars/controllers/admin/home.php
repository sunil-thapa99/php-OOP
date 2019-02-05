<!-- 
Un id: 17421492 
-->
<?php 
	$pageTitle = "Claires's Cars - Admin";
	$className = "admin";
	// Create object
	$story = new DatabaseQueryTable($pdo, 'story');
	$staff = new DatabaseQueryTable($pdo, 'account');
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// store account_id to view who added story
		$_POST['account_id'] = $_SESSION['id'];
		$imageCounter = 1;
		// View image
		for ($i=0; $i < count($_FILES['image']['name']); $i++) {
			$imgTmpFile = $_FILES['image']['tmp_name'][$i];
			if ($imgTmpFile != '') {
				$fileName = $_POST['story_title']. $imageCounter . '.jpg';
				move_uploaded_file($imgTmpFile, '../assests/images/story/' . $fileName);
				$imageCounter++;
			}
		}
		$_POST['imageCounter'] = $imageCounter;
		// Add story
		$stmt = $story->save($_POST);
		$mainContent = 'Story has been added';
	}
	else{ 
		// Load template indexViewTemplate
		$templateDesignVariable = [
			'staff' => $staff,
			'story' => $story
		];
		$mainContent = pageLoadTemplate('../views/admin/indexViewTemplate.php', $templateDesignVariable);
	}
 ?>
