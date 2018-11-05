<?php
	class controller{
		private $db;
		public function __contruct(){
			$this->db = new mysqli("localhost", "root", "", "modul8");
		}

		function login(){
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
				$query = mysqli_query($this->db, $sql);
				if (mysqli_num_rows($query) == 1) {
					session_start();
					$_SESSION['username'] = $username;
					header("Location: dashboard.php");
				}else{
					
					echo "username/password salah!!";
				
				}
			}
		}

		function registrasi(){
			if (isset($_POST['registrasi'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				

				$sql = "INSERT INTO `user`(`username`, `password`) VALUES ('$username', '$password')";

				if(mysqli_query($this->db, $sql)){
					header("Location: index.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($this->db);
				}
			}
		}

		function dashboard($cari){
			$sql = "SELECT * from jurnal WHERE nim LIKE '%$cari%'";

			$result = mysqli_query($this->db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>" . $nim . "</td>";
					echo "<td>" . $row['namadepan'] . "</td>";
					echo "<td>" . $row['namabelakang']  . "</td>";
					echo "<td>" . $row['email']  . "</td>";
					echo "<td>" . $row['kelas']  . "</td>";
					echo "<td>" . $row['hobi']  . "</td>";
					echo "<td>" . $row['genre']  . "</td>";
					echo "<td>" . $row['wisata']  . "</td>";
					echo "<td>" . $row['ttl']  . "</td>";
				//	echo "<td> <a href='form_edit.php?nim=$nim'>Edit</a> | <a href='controller.php?delete=true&nim=$nim'>Hapus</a> </td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($this->db);
		}

		function newData(){
			if (isset($_POST['inputdata'])) {

				$nim = $_POST['nim'];
				$namadepan = $_POST['namadepan'];
				$namabelakang = $_POST['namabelakang'];
				$email = $_POST['email'];
				$kelas = $_POST['kelas'];	
				$hobby = $_POST['hobby'];
				$genre = $_POST['genre'];
				$wisata = $_POST['wisata'];
				$ttl = $_POST['ttl'];

				$hobi = implode(", ", $hobby);
				$genre = implode(", ", $genre);
				$wisata = implode(", ", $wisata);	

				$sql = "INSERT INTO `jurnal`(`nim`, `namadepan`, `namabelakang`, `email`, `kelas`, `hobi`, `genre`, `wisata`, `ttl`)
						VALUES ('$nim', '$namadepan', '$namabelakang', '$email', '$kelas', '$hobi', '$genre', '$wisata', '$ttl')";

				if (mysqli_query($this->db, $sql)) {
					echo "<br>";
					echo "Data Berhasil di Input";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($this->db);

				}

			mysqli_close($this->db);
			}
		}

		function profile(){
			session_start();
			$username = $_SESSION['username'];

			$sql = "SELECT * FROM user WHERE username='$username'";

			$result = mysqli_query($this->db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$username = $row['username'];
					echo "<tr>";
					echo "<td>" . $username . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td><a href=editpass.php?username=$username>Edit Password</a></td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($this->db);
		}


		function ambil_data($nim){
				$sql = "SELECT * from jurnal where nim='$nim'";
				return mysqli_query($this->db, $sql);

		}

		
		function datapass($username){
			$sql = "SELECT * FROM `user` WHERE username='$username'";
			return mysqli_query($this->db, $sql);

		}



		function cari(){
			$cari = $_POST['search'];
			$sql = "SELECT * FROM jurnal WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($this->db, $sql);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['nim'] . "</td>";
				echo "<td>" . $row['namadepan'] . "</td>";
				echo "<td>" . $row['namabelakang']  . "</td>";
				echo "<td>" . $row['email']  . "</td>";
				echo "<td>" . $row['kelas']  . "</td>";
				echo "<td>" . $row['hobi']  . "</td>";
				echo "<td>" . $row['genre']  . "</td>";
				echo "<td>" . $row['wisata']  . "</td>";
				echo "<td>" . $row['ttl']  . "</td>";
				echo "</tr>";
			}
			}
		}

		function logout(){
			session_start();
			session_destroy();
			header("Location: index.php");
		}
	}

	$controller = new Controller();
	if (isset($_GET['logout'])) {
		$controller->logout();
	}


?>