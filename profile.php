<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Profile</title>
</head>
<body>

	<a href="dashboard.php">Dashboard</a>
	<a href="newData.php">Tambah Data</a>
	<a href="profile.php">]Lihat Profil</a>
	<a href="controller.php?logout=true">LOGOUT</a>

						
						<table >
						  <thead>
						    <tr>
						      <th >Username</th>
						      <th >Password</th>
		
						    </tr>
						  </thead>
						  	  <?php $controller->profile(); ?>
						  </tbody>
						</table>

</body>
</html>	