<?php 
require_once('koneksi.php');
$db = new database();

session_start();
// $aksi = $_GET['aksi'];
$nama = mysql_query("select nama from user");
$password = mysql_query("select password from user");
	
	if (isset($_POST['masuk'])) {
		if ($_POST['nama'] == $nama && $_POST['password'] == $password) {
			$_SESSION['nama_user'] = $_POST['nama'];
			header('Location:index.php', $_POST['nama']);
		}else{
			echo "gagal login";
		}
	}

 ?>