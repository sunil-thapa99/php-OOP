<!-- 
	UN id: 17421492
 -->
<div class="tab">
	<h2>Cars</h2>
	<ul>
		<li><a href="addCar">Add new car</a></li>
		<li><a href="carArchive">View Archive Cars</a></li>
	</ul>
</div>

<?php
	// Display all the cars which are not archived with option to edit and archive
	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['Car Id', 'Model', 'Recent Price', 'Old Price', 'Description','Added By', 'Mileage', 'Engine Type', 'Edit', 'Delete']);
	while($car = $categoryObject->fetch(PDO::FETCH_ASSOC)){
		if ($car['archive'] == 'N') {
			$person = $personObject->findData('account_id', $car['account_id']);
			$person = $person->fetch();
			$car['account_id'] = $person['userFirstName'];
			$car['price'] = '£'.$car['price'];
			if($car['oldPrice'] != ''){
				$car['oldPrice'] = '£'.$car['oldPrice'];
			}
			$editVehicle = '<a href="editcar?id=' . $car['id'] . '">Edit</a>';
			$removeVehicle = '<a href="carArchive?id=' . $car['id'] . '">Archive</a>';
			array_push($car, $editVehicle, $removeVehicle);
			unset($car['manufacturerId']);
			unset($car['archive']);
			unset($car['imageCounter']);
			$tableDisplay->setDataOnRow($car);
		}
	}
	echo $tableDisplay->getterHTML();
?>