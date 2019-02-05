<!-- 
	UN id: 17421492
 -->
<div class="tab">
	<h2>Enquiry</h2>
</div>

<?php

	$tableDisplay = new GenerateTableFunction();
	$tableDisplay->setColumnTitle(['Enquiry Id', 'Customer Name', 'Customer Email', 'Cusomter Telephone', 'Enquiry','Status', 'Dealt Staff', 'Mark as Complete']);
	// View all the enquiry list
	while($enquiry = $enquiryObject->fetch(PDO::FETCH_ASSOC)){
		$person = $personObject->findData('account_id', $enquiry['staff_id']);
		$person = $person->fetch();
		$enquiry['staff_id'] = $person['userFirstName'];
		// Show the completion status
		if ($enquiry['status'] == 'not complete') {
			$completion =  "complete";
		}else{
			$completion = "not complete";
		}
		// Change status for completion
		$completionMark = '
		<form method="POST" action="contact">
			<input type="hidden" name="enquiry_id" value="'.$enquiry['enquiry_id'].'">
			<input type="submit" name="status" value="'.$completion.'">
		</form>';
		array_push($enquiry, $completionMark);
		$tableDisplay->setDataOnRow($enquiry);
	}
	// Geneterate table HTML
	echo $tableDisplay->getterHTML();
?>	