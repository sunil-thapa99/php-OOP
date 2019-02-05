<!-- 
	UN id: 17421492
 -->
<?php 
	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['Car Id', 'Model', 'Recent Price', 'Old Price', 'Description', 'Mileage', 'Engine Type', 'Restore', 'Delete']);
	$cars = $carObject->findAllData();
	while($car = $cars->fetch(PDO::FETCH_ASSOC)){
		// If archive, show archived cars with option to delete and restore
		if($car['archive'] === 'Y'){
			$car['price'] = '£'.$car['price'];
			if($car['oldPrice'] != ''){
				$car['oldPrice'] = '£'.$car['oldPrice'];
			}
			$editVehicle = '<a href="carArchive?id=' . $car['id'] . '&res">Restore</a>';
			$removeVehicle = '<a onclick="return confirm(\'Do you want to delete?\')" href="deletecar?id=' . $car['id'] . '">Delete</a>';
			array_push($car, $editVehicle, $removeVehicle);
			unset($car['manufacturerId']);
			unset($car['archive']);
			unset($car['account_id']);
			unset($car['imageCounter']);
			$tableDisplay->setDataOnRow($car);
		}
	}
	echo $tableDisplay->getterHTML();
?>