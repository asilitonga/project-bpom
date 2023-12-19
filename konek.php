<?php
//set time zone location sesuai negara, jadikan Asia Jakarta
date_default_timezone_set('Asia/Jakarta');

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "coba";

$konek = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>