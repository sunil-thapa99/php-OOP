<!-- 
	UN id: 17421492
 -->
<?php
	$careers = $careerObject->findAllData();
	if ($careers->rowCount() != 0) {
		// View careers
		foreach ($careers as $career) {
			echo 'Job Description: '.$career['job_description'].'<br>';
			echo 'Number of vacancy: '.$career['no_of_vacancy'].'<br>';
			echo 'Status: '.$career['status'].'<br>';
			echo "<hr>";
		}
	}
	else{
		echo 'Claire’s Cars currently has no job opportunities available, but keep checking as new positions become available regularly';
	}
?>
<hr>
<!-- Open form on button click -->
<button onclick="openAddForm()">Add button</button>
<form method="POST" action="career" id="addCareer">
	<label>Job Description</label>
	<textarea rows="15" cols="45" name="job_description"></textarea><br>
	<?php 
	// Array to create forms
		$fields = [
			["Number of vacancy", "text", "no_of_vacancy", ""], ["Status", "text", "status", ""]
		];
		form($fields);
	?>
	<input type="submit" name="addSub" value="Add Job" />
</form>