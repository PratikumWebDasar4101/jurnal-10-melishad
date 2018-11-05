<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>

	
	<title>Bikin data baru</title>
</head>
<body>

	<a href="dashboard.php">Dashboard</a>
	<a href="newData.php">Tambah Data</a>
	<a href="profile.php">]Lihat Profil</a>
	<a href="controller.php?logout=true">LOGOUT</a>
	
==
						
						<h2>Input Data Mahasiswa</h2>
						<table>
							<form action="" method="post">
								<tr>
									<td>NIM</td>
									<td> : </td>
									<td><input type="text" name="nim" ></td>
								</tr>
								<tr>
									<td>Nama Depan</td>
									<td> : </td>
									<td><input type="text" name="namadepan" "></td>
								</tr>
								<tr>
									<td>Nama Belakang</td>
									<td> : </td>
									<td><input type="text" name="namabelakang" ></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> : </td>
									<td><input type="text" name="email" ></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td> : </td>
									<td><input type="text" name="kelas" ></td>
								</tr>
								<tr>
									<td>Hobby</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="hobby[]" value="Memancing">Memancing<br>
										<input type="checkbox" name="hobby[]" value="Olahraga">Olahraga<br>
										<input type="checkbox" name="hobby[]" value="Menggambar">Menggambar<br>
										<input type="checkbox" name="hobby[]" value="Belanja">Belanja<br>
										<input type="checkbox" name="hobby[]" value="belajar">Belajar<br>
									</td>
								</tr>
								<tr>
									<td>Genre Film</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="genre[]" value="Horor">Horor<br>
										<input type="checkbox" name="genre[]" value="Anime">Anime<br>
										<input type="checkbox" name="genre[]" value="Action">Thriller<br>
										<input type="checkbox" name="genre[]" value="Drama">Drama<br>
		
									</td>
								</tr>
								<tr>
									<td>Tempat Wisata</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
										<input type="checkbox" name="wisata[]" value="Tanjung Selor">Tanjung Selor<br>
										<input type="checkbox" name="wisata[]" value="Jakarta"> Jakarta<br>
										<input type="checkbox" name="wisata[]" value="Lombok"> Lombok <br>
									</td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td> : </td>
									<td><input type="date" name="ttl" class="form-control"></td>
								</tr>
								<tr>
									<td><input type="submit" name="inputdata" value="Input Data" class="btn btn-success"></td>
								</tr>
							</form>
						</table>
						<?php $controller->newData(); ?>

</body>
</html>	