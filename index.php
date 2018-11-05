<?php

	require_once 'Controller.php';
	$controller = new controller();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>asdkoaskd</title>
</head>
<body>
	<form action="dashboard.php" method="POST">
		<h1>welcome to my blogs</h1>
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
		<input type="submit" name="login" value="Login">
		<?php $controller->login(); ?>
	</form>
</body>
</html>