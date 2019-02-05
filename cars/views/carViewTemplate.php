<!-- 
	UN id: 17421492
 -->
<section class="left">
		<ul>
			<?php 
			// Load manufacture on sidebar
				$navMenu = $manufactureObject->findAllData();
				foreach ($navMenu as $row) {
					echo '<li><a href="viewCar?id='.$row['id'].'&ob='.$row['name'].'">'.$row['name'].'</a></li>';
				}
			?>

		</ul>
	</section>

	<section class="right">

		<h1>Our cars</h1>

	<ul class="cars">


	<?php
	foreach ($cars as $car) {
		// Load those cars who are not archived
		if ($car['archive'] == 'N') {
			$manu = $manufactureObject->findData("id", $car['manufacturerId']);
			$manufacturer = $manu->fetch();
			echo '<li>';
				echo '<div class="details">';
				echo '<h2>' . $manufacturer['name'] . ' ' . $car['name'] . '</h2>';
			echo '<h3>Recent Price: £' . $car['price'] . '</h3>';
			echo '<h3>Old Price: £' . $car['oldPrice'] . '</h3>';
			echo '<p>' . $car['description'] . '</p>';
			echo '<p>Mileage: ' . $car['mileage'] . '</p>';
			echo '<p>Engine Type: ' . $car['engine_type'] . '</p>';
			echo '</div>';
			for ($i=1; $i < $car['imageCounter']; $i++) { 
				// Load image
				$imageName = $car['name'].$i.'.jpg';
				if (file_exists('../assests/images/cars/' . $imageName)) {
					echo '<a href="../assests/images/cars/'.$imageName.'"><img src="../assests/images/cars/'. $imageName .'" /></a>';
				}	
			}
			echo '</li>';
		}
	}

	?>

</ul>

</section>