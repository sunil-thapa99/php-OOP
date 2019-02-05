<!-- 
	UN id: 17421492
 -->
<?php 
	// Find opening hrs record of selected day
	if (isset($_GET['id'])) {
		$currentMan = $openingObject->findData('id', $_GET['id'])->fetch();
	}
?>
<h2>Opening Hrs</h2>
<?php 
// Create table object
	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['S.N.', 'Day', 'Time', 'Edit']);
	$opening = $openingObject->findAllData();
	// Display all the record on table and show edit option
	while($categ = $opening->fetch(PDO::FETCH_ASSOC)){
		$edit = '<a href="openingHrs?id=' . $categ['id'] . '">Edit</a>';
		array_push($categ, $edit);
		$tableDisplay->setDataOnRow($categ);
	}
	echo $tableDisplay->getterHTML();
?>

<?php if (isset($_GET['id'])) {
	
?>
<h2>Edit Opening Hours</h2>
	<form action="openingHrs" method="POST">
	<input type="hidden" name="id" value="<?php echo $currentMan['id']; ?>" />
	<?php 
	// If edit, load form with values of the record
		$fields = [
			["Day", "text", "day", 'value="'.$currentMan['day'].'" disabled'], ["Time", "text", "time", 'value="'.$currentMan['time'].'"']
		];
		form($fields);
	?>
	<input type="submit" name="submit" value="Save Manufacturer" />
</form>
<?php } ?>