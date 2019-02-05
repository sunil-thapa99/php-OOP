<!-- 
Un id: 17421492
 -->
<?php 
	$pageTitle = "Claires's Cars - Home";
	$className = "home";
	$story = new DatabaseQueryTable($pdo, 'story');
	$staff = new DatabaseQueryTable($pdo, 'account');
	$templateDesignVariable = [
		'staff' => $staff,
		'story' => $story
	];
	// Load home template
	$mainContent = 	pageLoadTemplate('../views/homeViewTemplate.php', $templateDesignVariable);
?>
