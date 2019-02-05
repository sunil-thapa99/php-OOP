<!-- 
	UN id: 17421492
 -->
<h2>Manufacturers</h2>
<a class="new" href="addManufactures">Add new manufacturer</a>
<?php 
	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['Manufacturer Id', 'Manufacturer Name', 'Edit', 'Delete']);
	$categories = $categoryObject->findAllData();
	while($categ = $categories->fetch(PDO::FETCH_ASSOC)){
		// Display all the records of manufacturer with edit and delete option 
		$editVehicle = '<a href="editmanufacturers?id=' . $categ['id'] . '">Edit</a>';
		$removeVehicle = '<a onclick="return confirm(\'Do you want to delete?\')" href="deletemanufacturer?id=' . $categ['id'] . '">Delete</a>';
		// Push the created option to the $categ array so that it could be added later on table
		array_push($categ, $editVehicle, $removeVehicle);
		$tableDisplay->setDataOnRow($categ);
	}
	echo $tableDisplay->getterHTML();
?>

		