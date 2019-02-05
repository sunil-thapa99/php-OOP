<!-- 
	UN id: 17421492
	username: claire.smith
	password: claire123
-->
<h2>Log in</h2>
<form action="../public/login" method="post" style="padding: 40px">
	<?php 	
		// Fields to create log in form
		$fields = [
			["Enter Username: ", "text", "usernameCredentials", "required"], ["Enter Password: ", "password", "passwordCredentials", "required"]
		];
		form($fields);
	?>
	<input type="submit" name="submit" value="Log In" />
</form>