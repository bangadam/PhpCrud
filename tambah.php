<h1>OOP PHP Crud</h1>
<h3>Tambah Data</h3>

<form action="proses.php?aksi=tambah" method="post">
	<label for="">nama</label>
	<input type="text" name="nama" required>
	<br>
	<label for="">alamat</label>
	<textarea name="alamat" cols="30" rows="3"></textarea>
	<br>
	<label for="">usia</label>
	<input type="text" name="usia" required>
	<input type="submit" name="simpan" value="simpan">
</form>