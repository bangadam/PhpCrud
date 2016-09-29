<?php 
require('koneksi.php');
$db = new database();
 ?>

 <h1>Crud OOP PHP</h1>

 <h3>data user</h3>

<a href="tambah.php">Input data</a>
<table border="2">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>

	<?php 
	$no = 1;
	foreach ($db->tampil_data() as $data) {
	?>

	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>

	<?php
		}
	 ?>

</table>
