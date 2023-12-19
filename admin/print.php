<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>	
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" 	content="IE=edge">		
		<meta name="viewport" 				content="width=device-width, initial-scale=1">
		<meta name="description" 			content="SIFPEG WEB">
		<meta name="author" 				content="Andreas Silitonga">
	
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SIFPEG WEB | BPOM.GO.ID</title>	
	
	<!-- CSS Header -->		
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	
	<style>
	table{box-shadow:0px 0px 5px #aaa;} /*sedikit bayangan yang soft*/
	table th{
		padding:10px; 
		font-weight:bold; 
		background:#33B4E4; 
		color:#fff; 
		text-transform:uppercase;
	}
	
	table td{
		padding:10px 5px;
	}	
	</style>
	
	</head>
	<body>

	<br>
	<center>
		<h2>DATA ARSIP PEGAWAI</h2>
		<h4>Balai Pengawas Obat dan Makanan Kota Medan</h4>
	</center>
	<br>
 
	<?php 
	include '../konek.php';
	?>
 
	<div class="table-responsive">
	<table class="table table-bordered table-responsive" style="width:100%">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>	
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Usia</th>
			<th>Jenis Kelamin</th>
			<th>TMT CPNS</th>
			<th>Masa Kerja PNS</th>
			<th>Golongan</th>
			<th>TMT Golongan</th>	
			<th>Masa Kerja Gol</th>
			<th>Eselon</th>
			<th>Jabatan</th>
			<th>Bagian</th>
			<th>Status</th>
			<th>Diklat Struktural</th>		
			<th>Tahun Diklat</th>
			<th>Program Pendidikan</th>
			<th>Program Studi</th>
			<th>Nama Sekolah</th>
			<th>Tahun Lulus</th>
			<th>Agama</th>	
		</tr>
		
		<?php 
		$no = 1;
		$sql = mysqli_query($konek,"select * from mahasiswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tela']; ?></td>
			<td><?php echo $data['tala']; ?></td>
			<td><?php echo $data['usia']; ?></td>
			<td><?php echo $data['jenkel']; ?></td>
			<td><?php echo $data['tmtcpns']; ?></td>
			<td><?php echo $data['mkp']; ?></td>
			<td><?php echo $data['golongan']; ?></td>
			<td><?php echo $data['tmtgol']; ?></td>
			<td><?php echo $data['mkg']; ?></td>
			<td><?php echo $data['eselon']; ?></td>			
			<td><?php echo $data['jabatan']; ?></td>
			<td><?php echo $data['bagian']; ?></td>
			<td><?php echo $data['status']; ?></td>			
			<td><?php echo $data['dikstruk']; ?></td>
			<td><?php echo $data['tadi']; ?></td>
			<td><?php echo $data['propen']; ?></td>
			<td><?php echo $data['prodi']; ?></td>			
			<td><?php echo $data['nase']; ?></td>
			<td><?php echo $data['talu']; ?></td>
			<td><?php echo $data['agama']; ?></td>				
		</tr>
		
		<?php 
		}
		?>
	</table>
	
	</div>	 	
	</div>

	<script>
		window.print();
	</script>
 
</body>
</html>