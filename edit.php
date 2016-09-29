<?php 
require_once('koneksi.php');
$db = new database();
?>

<h1>OOP PHP Crud</h1>
<h3>Edit Data</h3>


<form action="proses.php?aksi=update" method="post">
<?php 

	foreach ($db->edit($_GET['id']) as $data) {

 ?>
 	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	<label for="">nama</label>
	<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
	<br>
	<label for="">alamat</label>
	<textarea name="alamat" cols="30" rows="3">
		<?php echo $data['alamat'] ?>
	</textarea>
	<br>
	<label for="">usia</label>
	<input type="text" name="usia" value="<?php echo $data['usia'] ?>">
	<input type="submit" name="simpan" value="simpan">
<?php } ?>
</form>
