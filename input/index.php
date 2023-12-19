<?php
session_start();
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
	
	<!-- CSS FORM INPUT GRID -->	
	<link rel="stylesheet" href="../assets/css/abc.css">
	
	<!-- CSS Header -->	
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">	
	
	<!-- CSS Tombol -->	
	<link rel="stylesheet" href="../assets/css/tombol.css">			
	
</head>
<body>
	
	<div class="container" style="margin-top:20px">
		<h2>Tambah Data</h2>
		<hr>	

<?php
if(isset($_SESSION['error'])){
	echo '<div style="color:#d00;">'.$_SESSION['error'].'</div>';
	unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
	echo '<div style="color:#080;">'.$_SESSION['success'].'</div>';
	unset($_SESSION['success']);
}
?>

		<form action="proses.php" method="post" enctype="multipart/form-data">

        <p>
          <label for="">NIP</label>
		  <input type="text" name="nip" class="form-control" required>
        </p>
		
        <p>
          <label for="">NAMA</label>
		  <input type="text" name="nama" class="form-control" required>
        </p>		
		
        <p>
          <label for="">TEMPAT LAHIR</label>
		  <input type="text" name="tela" class="form-control" required>
        </p>
		
        <p>
          <label for="">TANGGAL LAHIR</label>
		  <input type="date" name="tala" class="form-control" required>
        </p>	

        <p>
          <label for="">USIA</label>
		  <input type="text" name="usia" class="form-control" required>
        </p>
		
        <p>
          <label for="">JENIS KELAMIN</label>
			<select name="jenkel" class="form-control" required>
				<option value="">PILIH JENIS KELAMIN ANDA</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>							
			</select>
        </p>	

        <p>
          <label for="">TMT CPNS</label>
		  <input type="date" name="tmtcpns" class="form-control" required>
        </p>
		
        <p>
          <label for="">MASA KERJA PNS</label>
		  <input type="text" name="mkp" class="form-control" required>
        </p>	

        <p>
          <label for="">GOLONGAN</label>
			<select name="golongan" class="form-control" required>
				<option value="">PILIH GOLONGAN ANDA</option>
				<option value="I/a">I/a</option>
				<option value="I/b">I/b</option>
				<option value="I/c">I/c</option>
				<option value="I/d">I/d</option>
				<option value="II/a">II/a</option>
				<option value="II/b">II/b</option>
				<option value="II/c">II/c</option>
				<option value="II/d">II/d</option>
				<option value="III/a">III/a</option>
				<option value="III/b">III/b</option>
				<option value="III/c">III/c</option>
				<option value="III/d">III/d</option>	
				<option value="IV/a">IV/a</option>						
				<option value="IV/b">IV/b</option>
				<option value="IV/c">IV/c</option>
				<option value="IV/d">IV/d</option>	
				<option value="IV/e">IV/e</option>						
			</select>
        </p>	

        <p>
          <label for="">TMT GOLONGAN</label>
		  <input type="date" name="tmtgol" class="form-control" required>
        </p>			
		
        <p>
          <label for="">MASA KERJA GOLONGAN</label>
		  <input type="text" name="mkg" class="form-control" required>
        </p>	

        <p>
          <label for="">ESELON</label>
			<select name="eselon" class="form-control" required>
				<option value="">PILIH ESELON ANDA</option>
				<option value="I">				I</option>
				<option value="II">				II</option>
				<option value="III">			III</option>
				<option value="IV">				IV</option>									
			</select>
        </p>	
		
        <p>
          <label for="">JABATAN</label>
		  <input type="text" name="jabatan" class="form-control" required>
        </p>	

        <p>
          <label for="">BAGIAN</label>
			<select name="bagian" class="form-control" required>
				<option value="">PILIH BAGIAN ANDA</option>
				<option value="Bag. Tata Usaha">Bag. Tata Usaha</option>
				<option value="Sub. Bagian Umum">Sub. Bagian Umum</option>
				<option value="Sub. Bagian Perencanaan">Sub. Bagian Perencanaan</option>
				<option value="Bidang Infokom">Bidang Infokom</option>
				<option value="Bidang Penindakan">Bidang Penindakan</option>
				<option value="Bidang Pemeriksaan">Bidang Pemeriksaan</option>	
				<option value="Seksi Inspeksi">Seksi Inspeksi</option>	
				<option value="Seksi Sertifikasi">Seksi Sertifikasi</option>	
				<option value="Bidang Pengujian">Bidang Pengujian</option>	
				<option value="Seksi Peng. Microbiologi">Seksi Peng. Microbiologi</option>		
				<option value="Seksi Peng. Kimia">Seksi Peng. Kimia</option>		
				<option value="Loka Toba Samosir">Loka Toba Samosir</option>		
				<option value="Loka Tanjung Balai">Loka Tanjung Balai</option>									
			</select>
        </p>	

        <p>
          <label for="">STATUS</label>
			<select name="status" class="form-control" required>
				<option value="">PILIH STATUS ANDA</option>
				<option value="PNS">PNS</option>
				<option value="CPNS">CPNS</option>							
			</select>
        </p>	

        <p>
          <label for="">DIKLAT STRUKTURAL</label>
		  <input type="text" name="dikstruk" class="form-control" required>
        </p>	

        <p>
          <label for="">TAHUN DIKLAT</label>
		  <input type="text" name="tadi" class="form-control" required>
        </p>	

        <p>
          <label for="">PROGRAM PENDIDIKAN</label>
		  <input type="text" name="propen" class="form-control" required>
        </p>	

        <p>
          <label for="">PROGRAM STUDI</label>
		  <input type="text" name="prodi" class="form-control" required>
        </p>	

        <p>
          <label for="">NAMA SEKOLAH</label>
		  <input type="text" name="nase" class="form-control" required>
        </p>	

        <p>
          <label for="">TAHUN LULUS</label>
		  <input type="text" name="talu" class="form-control" required>
        </p>	

        <p>
          <label for="">AGAMA</label>
			<select name="agama" class="form-control" required>
				<option value="">PILIH AGAMA ANDA</option>
				<option value="ISLAM">ISLAM</option>
				<option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
				<option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
				<option value="BUDDHA">BUDDHA</option>			
				<option value="HINDU">HINDU</option>	
				<option value="KONGHUCU">KONGHUCU</option>							
			</select>
        </p>			

				<p class="input-file-wrapper">
					<label for="upload">KARTU PNS</label>				
					<input type="file" name="file1[]" class="form-control" multiple="multiple">
				</p>
				
				<p class="input-file-wrapper">
					<label for="upload">KARTU TASPEN</label>				
					<input type="file" name="file2[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">SK</label>				
					<input type="file" name="file3[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">SK PENAIKAN PANGKAT</label>				
					<input type="file" name="file4[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">FORMULIR SASARAN KERJA</label>				
					<input type="file" name="file5[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">KENAIKAN GAJI</label>				
					<input type="file" name="file6[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">KTP</label>				
					<input type="file" name="file7[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">IJASAH</label>				
					<input type="file" name="file8[]" class="form-control" multiple="multiple">
				</p>

				<p class="input-file-wrapper">
					<label for="upload">SERTIFIKAT</label>				
					<input type="file" name="file9[]" class="form-control" multiple="multiple">
				</p>				

			
			<div class="form-actions"><center><center>
					<input type="submit" name="submit" class="btn button blue" value="SIMPAN">
					<a href="../tabel/index.php" class="btn button pink">KEMBALI</a>		
				</center>
				</div>
			</div>				
</form>
</div>

</body>
</html>