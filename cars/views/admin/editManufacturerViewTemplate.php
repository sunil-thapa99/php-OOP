<!-- 
	UN id: 17421492
 -->
<?php 
	// Load details of selected manufacturing company
	$currentMan = $manufactureObject->findData('id', $_GET['id'])->fetch();
?>
<h2>Edit Manufacturer</h2>
	<form action="editManufacturers" method="POST">
	<input type="hidden" name="id" value="<?php echo $currentMan['id']; ?>" />
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $currentMan['name']; ?>" />
	<input type="submit" name="submit" value="Save Manufacturer" />
</form>