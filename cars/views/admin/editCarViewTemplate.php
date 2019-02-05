<!-- 
	UN id: 17421492
 -->
<?php 	
	// Find the car details to be edited
	$car = $carObject->findData('id', $_GET['id'])->fetch();
?>
<h2>Edit Car</h2>

<form action="editcar" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?php echo $car['id']; ?>" />
	<?php 	
		// Create form and load the details
		$fields = [
			["Name", "text", "name", 'value="'.$car['name'].'"'], ["Price", "text", "price", 'value="'.$car['price'].'"'], ["Old Price", "text", "oldPrice", 'value="'.$car['oldPrice'].'" disabled']
		];
		form($fields);
	?>
	<label>Description</label>
	<textarea name="description"><?php echo $car['description']; ?></textarea>
	<label>Category</label>

	<select name="manufacturerId">
	<?php
		// Display manufacturers available
		$stmt = $manufacturerObject->findAllData();
		foreach ($stmt as $row) {
			if ($car['categoryId'] == $row['id']) {
				echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
			}
			else {
				echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';	
			}
			
		}

	?>
	</select>

	<label>Mileage</label>
	<input type="text" name="mileage" value="<?php echo $car['mileage']; ?>">

	<label>Engine Type</label>
	<select name="engine_type">
		<option value="petrol">Petrol</option>
		<option value="diesel">Diesel</option>
	</select>

	<div class="displayImage">
	<?php
	// Display images
		for ($i=1; $i < $car['imageCounter']; $i++) { 
			$imageName = $car['name'].$i.'.jpg';
			if (file_exists('../assests/images/cars/' . $imageName)) {
				echo '<a href="../../assests/images/cars/'.$imageName.'"><img src="../../assests/images/cars/'. $imageName .'" /></a>';
			}	
		}
	?>
	</div>
	<label>Product image</label>
	<!-- Send multiple images -->
	<input type="file" name="image[]" multiple="multiple" />

	<input type="submit" name="submit" value="Save Product" />

</form>