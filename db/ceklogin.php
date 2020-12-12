<?php 
	include 'koneksi.php';
	if (isset($_POST['log'])) {
		$user = mysqli_real_escape_string($link, $_POST['email']);
		$pass = mysqli_real_escape_string($link, $_POST['password']);
		$action = "Login"; 
		$keterangan = "";

		$query = mysqli_query($link, "SELECT * FROM tb_user WHERE username='$user' and password='$pass'");
		//link log login
		$query1 = mysqli_query($link, "INSERT INTO `log` ( `user`, `action`, `keterangan` )
		VALUES ( '$user', '$action','$keterangan')");

		$data = mysqli_fetch_array($query);
		$username = $data['username'];
		$password = $data['password'];
		$level = $data['level'];

		// if(mysqli_num_rows($sql_login)>0) {
  //           $row_suplayer = mysqli_fetch_array($sql_login);
  //           $_SESSION["id_suplayer"] = $row_suplayer["id"];

		if ($user==$username && $pass==$password) {
			session_start();
			$_SESSION['nama'] = $username;
			// session_level();
			$_SESSION['level'] = $level;
			

			if ($level === 'admin') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../admin/dashboard.php'>";

			}elseif ($level === 'gudang') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../gudang/dashboard.php'>";

			}elseif ($level === 'suplayer') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../suplayer/dashboard.php'>";

			}elseif ($level === 'manajer') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../manajer/dashboard.php'>";
			
			}elseif ($level === 'umum') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../umum/dashboard.php'>";

			}
		}else {
				echo "<script> alert('username atau password salah'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
			}
	}

 ?>