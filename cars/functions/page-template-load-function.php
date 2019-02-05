<!-- 
	UN id: 17421492
 -->
<?php 
	// Function to load template 
	function pageLoadTemplate($nameOfFile, $templateDesignVariable){
		// Extract the array 
		extract($templateDesignVariable);
		ob_start();
		require $nameOfFile;
		// Store file on output buffer
		$mainContent = ob_get_clean();
		return $mainContent;
	}
?>