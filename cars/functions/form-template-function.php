<!-- 
	UN id: 17421492
 -->
<?php 	
	// function to create form
	function form($fields){
		foreach ($fields as $name) {
			// name[1] for type, $name[2] for form name, $name[3] for oter attributes of form
			echo '<label>'.$name[0].'</label>
				<input type="'.$name[1].'" name="'.$name[2].'" '.$name[3].'>';
		}
	}
?>
