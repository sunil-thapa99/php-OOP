<!-- 
	UN id: 17421492
 -->
<?php
	$careers = $careerObject->findAllData();
	if ($careers->rowCount() != 0) {
		// Load all the jobs
		foreach ($careers as $career) {
			echo 'Job Description: '.$career['job_description'].'<br>';
			echo 'Number of vacancy: '.$career['no_of_vacancy'].'<br>';
			echo 'Status: '.$career['status'].'<br>';
			if ($career['status'] == 'Active') {
				echo '<a href="career?id='.$career['job_id'].'">Apply</a>';
			}
			echo "<hr>";
		}
	}
	else{
		// If no jobs, show message
		echo 'Claire’s Cars currently has no job opportunities available, but keep checking as new positions become available regularly';
	}
	

?>
