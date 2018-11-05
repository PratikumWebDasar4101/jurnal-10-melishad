<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Dashboard</title>
</head>
<body>
	<a href="dashboard.php">Dashboard</a>
	<a href="newData.php">Tambah Data</a>
	<a href="profile.php">]Lihat Profil</a>
	<a href="controller.php?logout=true">LOGOUT</a>
	

						<form action="dashboard.php" method="post">
							<input type="text" name="search" placeholder="Cari berdasarkan NIM" >
							<input type="submit" name="submit" value="Cari" >
						</form>


						<table>
						  <thead>
						    <tr>
						      <th scope="col">NIM</th>
						      <th scope="col">Nama Depan</th>
						      <th scope="col">Nama Belakang</th>
						      <th scope="col">Email</th>
						      <th scope="col">Kelas</th>
						      <th scope="col">Hobby</th>
						      <th scope="col">Genre Film</th>
						      <th scope="col">Wisata</th>
						      <th scope="col">Tanggal Lahir</th>
						    
						    </tr>
						  </thead>
						  	  <?php
						  	  	@$cari = $_POST['search'];
						  	  	$controller->dashboard($cari);
						  	  ?>
						  </tbody>
						</table>


</body>
</html>	