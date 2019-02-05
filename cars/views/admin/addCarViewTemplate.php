<!-- 
	UN id: 17421492
 -->
<h2>Add Car</h2>
<form action="addCar" method="POST" enctype="multipart/form-data">
	<label>Car Model</label>
	<input type="text" name="name" />
	<label>Description</label>
	<textarea name="description"></textarea>
	<label>Price</label>
	<input type="text" name="price" />
	<label>Category</label>
	<select name="manufacturerId">
	<?php
		$stmt = $manufacturerObject->findAllData();
		// View all the manufacturer option on dropdown
		foreach ($stmt as $row) {
			echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
		}

	?>
	</select>
	<label>Mileage</label>
	<input type="text" name="mileage">
	<label>Engine Type</label>
	<select name="engine_type">
		<option value="petrol">Petrol</option>
		<option value="diesel">Diesel</option>
	</select>
	<label>Image</label>
	<!-- Send multiple images -->
	<input type="file" name="image[]" multiple="multiple" />
	<input type="submit" name="submit" value="Add Car" />
</form>