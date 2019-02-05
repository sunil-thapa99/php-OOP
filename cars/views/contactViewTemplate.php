<!-- 
	UN id: 17421492
 -->
<p>You can also reach us on  01604 90345 or via email <a href="mailto:enquiries@clairscars.co.uk">enquiries@clairscars.co.uk</a>
<form method="POST" action="contact">
	<?php 
		// Arrays that contain form type, name and additional attributes
		$fields = [
			["Your Name: ", "text", "cust_name", "required"], ["Your Email Address: ", "email", "cust_email", "required"], ["Your Telephone Number: ", "text", "cust_telephone", "required"]
		];
		form($fields);
	?>
	<label>Your Enquiry: </label>
	<textarea name="cust_enquiry" rows="5" cols="55"></textarea>
	<input type="submit" name="submit" value="Enquiry">
</form>
