<?php

	require_once 'Controller.php';
	$controller = new controller();
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Registrasi</title>
</head>
<body>
						<form action="index.php"method="post">
							<h2>Registrasi Akun</h2>
							Username : 
							<input type="text" name="username">
							Password : 
							<input type="password" name="password">
							Re-type Password : 
							<input type="password" name="repassword" ">
							<input type="submit" name="registrasi" value="Create User">

							<?php $controller->registrasi(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
