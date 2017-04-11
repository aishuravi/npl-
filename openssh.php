<html>
<head>
	<title>OpenSSH Form</title>
</head>
<?php  
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name=trim($_POST('name'));
		$email=trim($_POST('email'));
		$phone=trim($_POST('phone'));
	}
?>
<body>
	<form method="post" action="openssh.php">
		<label for="name">Name</label>
		<input type="text" name="name" required>
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="phone">Phone</label>
		<input type="text" name="phone">
	</form>
</body>
</html>