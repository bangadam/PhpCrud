<?php 

class database{
	
	var $host = "127.0.0.1";
	var $name = "root";
	var $password = "";
	var $db = "OOPCrud";

	function __construct() {
		mysql_connect(
			$this->host, 
			$this->name,
			$this->password
			);
		mysql_select_db($this->db);
	}

	function tampil_data() {
		$data = mysql_query("select * from user");
		while($row = mysql_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function input($nama,$alamat,$usia) {
		mysql_query("insert into user values('', '$nama', '$alamat', '$usia')");
	}

	function hapus($id){
		mysql_query("delete from user where id=$id");
	}

	function edit($id){
		$data = mysql_query("select * from user where id=$id");
		while($row = mysql_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;

	}

	function update($id,$nama,$alamat,$usia) {
		mysql_query("update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
	}
}

?>