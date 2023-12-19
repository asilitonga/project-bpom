<?php 
    require '../konek.php';
    $nip = null;
    if(!empty($_GET['nip']))
    {
        $nip = $_GET['nip'];
    }
    if($nip == null)
    {
        header("Location: index.php");
    }
    else
    {
        // read data
        $query 	= "SELECT * FROM mahasiswa where nip = $nip";
		$res    = mysqli_query($konek,$query);
		$data	= mysqli_fetch_array($res);
		
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sifpeg bpom">
    <meta name="author" content="andreas silitonga">
    
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SIFPEG WEB | BPOM.GO.ID</title>
	
	<!-- CSS FORM INPUT GRID -->	
	<link rel="stylesheet" href="../assets/css/abc.css">	

	<!-- CSS Header -->	
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<!-- JS Offline -->		
	<script src="../assets/js/bootstrap.min.js"></script>
	
	<!-- CSS Tombol -->	
	<link rel="stylesheet" href="../assets/css/tombol.css">			
	
</head>
<body>

	<div class="container" style="margin-top:20px">
		<h3>Data Karyawan - <?php echo $data['nama'];?></h3>
		<hr>	
		
		
 		<form>           
			<p>
				<label>NIP</label><?php echo $data['nip'];?>
            </p>
		
			<p>
				<label>NAMA</label><?php echo $data['nama'];?>
            </p>
		
			<p>
				<label>TEMPAT LAHIR</label><?php echo $data['tela'];?>
            </p>
		
			<p>
				<label>TANGGAL LAHIR</label><?php echo $data['tala'];?>
            </p>
			
			<p>
				<label>USIA</label><?php echo $data['usia'];?>
            </p>
		
			<p>
				<label>JENIS KELAMIN</label><?php echo $data['jenkel'];?>
            </p>
		
			<p>
				<label>TMT CPNS</label><?php echo $data['tmtcpns'];?>
            </p>
		
			<p>
				<label>MASA KERJA PNS</label><?php echo $data['mkp'];?>
            </p>		
			
			<p>
				<label>GOLONGAN</label><?php echo $data['golongan'];?>
            </p>
		
			<p>
				<label>TMT GOLONGAN</label><?php echo $data['tmtgol'];?>
            </p>
		
			<p>
				<label>MASA KERJA GOLONGAN</label><?php echo $data['mkg'];?>
            </p>
		
			<p>
				<label>ESELON</label><?php echo $data['eselon'];?>
            </p>
			
			<p>
				<label>JABATAN</label><?php echo $data['jabatan'];?>
            </p>
		
			<p>
				<label>BAGIAN</label><?php echo $data['bagian'];?>
            </p>
		
			<p>
				<label>STATUS</label><?php echo $data['status'];?>
            </p>
		
			<p>
				<label>DIKLAT STRUKTURAL</label><?php echo $data['dikstruk'];?>
            </p>		

			<p>
				<label>TAHUN DIKLAT</label><?php echo $data['tadi'];?>
            </p>
			
			<p>
				<label>PROGRAM PENDIDIKAN</label><?php echo $data['propen'];?>
            </p>
		
			<p>
				<label>PROGRAM STUDI</label><?php echo $data['prodi'];?>
            </p>
		
			<p>
				<label>NAMA SEKOLAH</label><?php echo $data['nase'];?>
            </p>
		
			<p>
				<label>TAHUN LULUS</label><?php echo $data['talu'];?>
            </p>	

			<p>
				<label>AGAMA</label><?php echo $data['agama'];?>
            </p>
			
			<p>
				<label></label>
            </p>	

			<p>
				<label></label>
            </p>	
			
</div>		
<div class="form-actions">
</form>
<hr/>

	<div class="container" style="margin-top:20px">
		<h3>Daftar File Dokumen Karyawan - <?php echo $data['nama'];?></h3>
		<hr>		
 		<form>           
		
			<p>
				<label>KARTU PNS</label><?php echo $data['file1'];?>
            </p>
			
			<p>
				<label>KARTU TASPEN</label><?php echo $data['file2'];?>
            </p>

			<p>
				<label>SK</label><?php echo $data['file3'];?>
            </p>

			<p>
				<label>SK PENAIKAN PANGKAT</label><?php echo $data['file4'];?>
            </p>

			<p>
				<label>FORMULIR SASARAN KERJA</label><?php echo $data['file5'];?>
            </p>

			<p>
				<label>KENAIKAN GAJI</label><?php echo $data['file6'];?>
            </p>

			<p>
				<label>KTP</label><?php echo $data['file7'];?>
            </p>

			<p>
				<label>IJASAH</label><?php echo $data['file8'];?>
            </p>

			<p>
				<label>SERTIFIKAT</label><?php echo $data['file9'];?>
            </p>	

			<p>
				<label></label>
            </p>					
</div>
			<div class="form-actions"><center><center>	
					<a href="../tabel/index.php" class="btn button blue">KEMBALI</a>		
				</center>
				</div>
			</div>	

</body>
</html>
