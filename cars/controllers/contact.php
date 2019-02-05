<!-- 
Un id: 17421492
 -->
<?php 
	$className = "home";
	$pageTitle = "Claires's Cars - Contact";
	if (isset($_POST['submit'])) {
		// Store contact forum on database
		unset($_POST['submit']);
		$data = $_POST;
		$enquiryObj = new DatabaseQueryTable($pdo, 'enquiry');
		$enquiry = $enquiryObj->save($data);
		echo '<script type="text/javascript">alert("Thanks for you enquiry.");</script>';
	}
	// Load contact view template
	$mainContent = 	pageLoadTemplate('../views/contactViewTemplate.php', []);
?>
