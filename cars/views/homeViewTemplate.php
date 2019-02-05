<!-- 
	UN id: 17421492
 -->
<h3>Welcome to Claire's Cars, Northampton's specialist in classic and import cars.</h3><hr>
<ul class="cars">
<?php 
	// Display story on the landing page of the site
	$storyDisplay = $story->findAllData();
	foreach($storyDisplay as $story) {
		$staffRec = $staff->findData("account_id", $story['account_id']);
		$staffRec = $staffRec->fetch();
		echo "<li>";
		echo '<h4>'.$story['story_title'].'</h4>
			<p>'.$story['story_description'].'</p>
			<p>By: '.$staffRec['userFirstName'].' '.$staffRec['userSurName'].'</p>
		';
		// View image 
		for ($i=1; $i < $story['imageCounter']; $i++) { 
			$imageName = $story['story_title'].$i.'.jpg';
			if (file_exists('../assests/images/story/' . $imageName)) {
				echo '<a href="../assests/images/story/'.$imageName.'"><img src="../assests/images/story/'. $imageName .'" /></a>';
			}	
		}
		echo "</li><hr>";
	}
	
?>
</ul>