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
	if ( !empty($_POST))
    {
              
        // post values	
        $nip		= $_POST['nip'];		
        $nama		= $_POST['nama'];
        $tela    	= $_POST['tela'];
        $tala 		= $_POST['tala'];
        $usia  		= $_POST['usia'];
        $jenkel  	= $_POST['jenkel'];
        $tmtcpns 	= $_POST['tmtcpns'];		
        $mkp		= $_POST['mkp'];
        $golongan   = $_POST['golongan'];
        $tmtgol 	= $_POST['tmtgol'];
        $mkg  		= $_POST['mkg'];
        $eselon  	= $_POST['eselon'];
        $jabatan 	= $_POST['jabatan'];	
        $bagian		= $_POST['bagian'];
        $status    	= $_POST['status'];
        $dikstruk 	= $_POST['dikstruk'];
        $tadi  		= $_POST['tadi'];
        $propen  	= $_POST['propen'];
        $prodi 		= $_POST['prodi'];	
        $nase		= $_POST['nase'];
        $talu    	= $_POST['talu'];
        $agama 		= $_POST['agama'];			
		
        $file1 		= $_FILES['file1']['name'];		
        $file2 		= $_FILES['file2']['name'];	
        $file3 		= $_FILES['file3']['name'];	
        $file4 		= $_FILES['file4']['name'];	
        $file5 		= $_FILES['file5']['name'];	
        $file6 		= $_FILES['file6']['name'];	
        $file7 		= $_FILES['file7']['name'];	
        $file8 		= $_FILES['file8']['name'];	
        $file9 		= $_FILES['file9']['name'];			
		
    //Cek File
    if (strlen($file1)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            move_uploaded_file ($_FILES['file1']['tmp_name'], "../datascan/KARTU_PNS/".$file1);
            mysqli_query ($konek,"UPDATE mahasiswa SET file1='$file1' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file2)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file2']['tmp_name'])) {
            move_uploaded_file ($_FILES['file2']['tmp_name'], "../datascan/KARTU_TASPEN/".$file2);
            mysqli_query ($konek,"UPDATE mahasiswa SET file2='$file2' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file3)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file3']['tmp_name'])) {
            move_uploaded_file ($_FILES['file3']['tmp_name'], "../datascan/SK/".$file3);
            mysqli_query ($konek,"UPDATE mahasiswa SET file3='$file3' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file4)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file4']['tmp_name'])) {
            move_uploaded_file ($_FILES['file4']['tmp_name'], "../datascan/SK_PENAIKAN_PANGKAT/".$file4);
            mysqli_query ($konek,"UPDATE mahasiswa SET file4='$file4' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file5)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file5']['tmp_name'])) {
            move_uploaded_file ($_FILES['file5']['tmp_name'], "../datascan/FORMULIR_SASARAN_KERJA/".$file5);
            mysqli_query ($konek,"UPDATE mahasiswa SET file5='$file5' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file6)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file6']['tmp_name'])) {
            move_uploaded_file ($_FILES['file6']['tmp_name'], "../datascan/KENAIKAN_GAJI/".$file6);
            mysqli_query ($konek,"UPDATE mahasiswa SET file6='$file6' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file7)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file7']['tmp_name'])) {
            move_uploaded_file ($_FILES['file7']['tmp_name'], "../datascan/KTP/".$file7);
            mysqli_query ($konek,"UPDATE mahasiswa SET file7='$file7' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file8)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file8']['tmp_name'])) {
            move_uploaded_file ($_FILES['file8']['tmp_name'], "../datascan/IJASAH/".$file8);
            mysqli_query ($konek,"UPDATE mahasiswa SET file8='$file8' WHERE nip='$nip'");
        }
		    }

    //Cek File
    if (strlen($file9)>0) {
        //upload File
        if (is_uploaded_file($_FILES['file9']['tmp_name'])) {
            move_uploaded_file ($_FILES['file9']['tmp_name'], "../datascan/SERTIFIKAT/".$file9);
            mysqli_query ($konek,"UPDATE mahasiswa SET file9='$file9' WHERE nip='$nip'");
        }				
    }
	
		
		// Update data
        $query = "Update mahasiswa set nama='$nama',tela='$tela',tala='$tala',usia='$usia' ,jenkel='$jenkel' ,tmtcpns='$tmtcpns' ,mkp='$mkp',
		golongan='$golongan' ,tmtgol='$tmtgol' ,mkg='$mkg' ,eselon='$eselon',jabatan='$jabatan',bagian='$bagian' ,status='$status' ,
		dikstruk='$dikstruk' ,tadi='$tadi', propen='$propen' ,prodi='$prodi',nase='$nase',talu='$talu' ,agama='$agama' where nip='$nip'";
       
	   mysqli_query($konek,$query);
	   header("Location: index.php");
    }
	else
	{
		
		$query = "SELECT * FROM mahasiswa where nip = $nip";
		$res    = mysqli_query($konek,$query);	
		$data	= mysqli_fetch_array($res);
		
        $nip  		= $data['nip'];
        $nama    	= $data['nama'];
        $tela 		= $data['tela'];
		$tala  		= $data['tala'];
        $usia  		= $data['usia'];
        $jenkel    	= $data['jenkel'];	
        $tmtcpns  	= $data['tmtcpns'];
        $mkp    	= $data['mkp'];
        $golongan 	= $data['golongan'];
		$tmtgol  	= $data['tmtgol'];
        $mkg  		= $data['mkg'];
        $eselon    	= $data['eselon'];	
        $jabatan  	= $data['jabatan'];
        $bagian    	= $data['bagian'];
        $status 	= $data['status'];
		$dikstruk  	= $data['dikstruk'];
        $tadi  		= $data['tadi'];
        $propen    	= $data['propen'];	
        $prodi  	= $data['prodi'];
        $nase    	= $data['nase'];
        $talu 		= $data['talu'];
		$agama  	= $data['agama'];	
		
        $file1 		= $data['file1'];	
        $file2 		= $data['file2'];	
        $file3 		= $data['file3'];		
        $file4 		= $data['file4'];	
        $file5 		= $data['file5'];	
        $file6 		= $data['file6'];	
        $file7 		= $data['file7'];	
        $file8 		= $data['file8'];	
        $file9 		= $data['file9'];				
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
	
	<!-- CSS Tombol -->	
	<link rel="stylesheet" href="../assets/css/tombol.css">		
	
</head>
<body>

	<div class="container" style="margin-top:20px">
		<h2>Edit Data Pegawai</h2>
		<hr>	
            
        <form method="POST" action="update.php"  enctype="multipart/form-data">
		
			<p>
				<label for="inputnip">NIP</label>
				<input type="text" class="form-control" required="required" id="inputnip" value="<?php echo !empty($nip)?$nip:'';?>" name="nip" placeholder="NIP">
				<span class="help-block"></span>
			</p>	
			
			<p>	
				<label for="inputnama">NAMA</label>
				<input type="text" class="form-control" required="required" id="inputnama" value="<?php echo !empty($nama)?$nama:'';?>" name="nama" placeholder="Nama">
				<span class="help-block"></span>
			</p>	
			
			<p>	
				<label for="inputtela">TEMPAT LAHIR</label>
				<input type="text" class="form-control" required="required" id="inputtela" value="<?php echo !empty($tela)?$tela:'';?>" name="tela" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>	
				<label for="inputtala">TANGGAL LAHIR</label>
				<input type="date" class="form-control" required="required" id="inputtala" value="<?php echo !empty($tala)?$tala:'';?>" name="tala" placeholder="">
				<span class="help-block"></span>
			</p>			
			
			<p>
				<label for="inputusia">USIA</label>
				<input type="text" required="required" class="form-control" id="inputusia" value="<?php echo !empty($usia)?$usia:'';?>" 
				 name="usia" placeholder="Age">
				<span class="help-block"></span>
			</p>
			
			<p>
				<label for="inputjenkel">JENIS KELAMIN</label>
				<select class="form-control" required="required" id="inputjenkel" name="jenkel" >
				<option>Please Select</option>
				<option value="Laki-Laki" 	<?php echo $jenkel == 'Laki-Laki'?'selected':'';?>>Laki-Laki</option>
				<option value="Perempuan" 	<?php echo $jenkel == 'Perempuan'?'selected':'';?>>Perempuan</option>
				</select>			
				<span class="help-block"></span>
			</p>				

			<p>
				<label for="inputtmtcpns">TMT CPNS</label>
				<input type="date" class="form-control" required="required" id="inputtmtcpns" value="<?php echo !empty($tmtcpns)?$tmtcpns:'';?>" name="tmtcpns" placeholder="">
				<span class="help-block"></span>
			</p>					
			
			<p>
				<label for="inputmkp">MASA KERJA PNS</label>
				<input type="text" class="form-control" required="required" id="inputmkp" value="<?php echo !empty($mkp)?$mkp:'';?>" name="mkp" placeholder="">
				<span class="help-block"></span>
			</p>								

			<p>
				<label for="inputgolongan">GOLONGAN</label>
				<select class="form-control" required="required" id="inputgolongan" name="golongan" >
				<option>Please Select</option>
						<option value="I/a" 	<?php echo $golongan == 'I/a'?'selected':'';?>>I/a</option>
						<option value="I/b" 	<?php echo $golongan == 'I/b'?'selected':'';?>>I/b</option>
						<option value="I/c" 	<?php echo $golongan == 'I/c'?'selected':'';?>>I/c</option>
						<option value="I/d" 	<?php echo $golongan == 'I/d'?'selected':'';?>>I/d</option>
						<option value="II/a" 	<?php echo $golongan == 'II/a'?'selected':'';?>>II/a</option>
						<option value="II/b" 	<?php echo $golongan == 'II/b'?'selected':'';?>>II/b</option>
						<option value="II/c" 	<?php echo $golongan == 'II/c'?'selected':'';?>>II/c</option>
						<option value="II/d" 	<?php echo $golongan == 'II/d'?'selected':'';?>>II/d</option>
						<option value="III/a" 	<?php echo $golongan == 'III/a'?'selected':'';?>>III/a</option>
						<option value="III/b" 	<?php echo $golongan == 'III/b'?'selected':'';?>>III/b</option>
						<option value="III/c" 	<?php echo $golongan == 'III/c'?'selected':'';?>>III/c</option>
						<option value="III/d" 	<?php echo $golongan == 'III/d'?'selected':'';?>>III/d</option>	
						<option value="IV/a" 	<?php echo $golongan == 'IV/a'?'selected':'';?>>IV/a</option>						
						<option value="IV/b" 	<?php echo $golongan == 'IV/b'?'selected':'';?>>IV/b</option>
						<option value="IV/c" 	<?php echo $golongan == 'IV/c'?'selected':'';?>>IV/c</option>
						<option value="IV/d" 	<?php echo $golongan == 'IV/d'?'selected':'';?>>IV/d</option>	
						<option value="IV/e" 	<?php echo $golongan == 'IV/e'?'selected':'';?>>IV/e</option>	
				</select>
				<span class="help-block"></span>
			</p>				
				
			<p>
				<label for="inputtmtgol">TMT GOLONGAN</label>
				<input type="date" class="form-control" required="required" id="inputtmtgol" value="<?php echo !empty($tmtgol)?$tmtgol:'';?>" name="tmtgol" placeholder="">
				<span class="help-block"></span>
			</p>					
			
			<p>
				<label for="inputmkg">MASA KERJA GOLONGAN</label>
				<input type="text" class="form-control" required="required" id="inputmkg" value="<?php echo !empty($mkg)?$mkg:'';?>" name="mkg" placeholder="">
				<span class="help-block"></span>
			</p>			
			
			<p>
				<label for="inputeselon">ESELON</label>
				<select class="form-control" required="required" id="inputeselon" name="eselon" >
				<option>Please Select</option>
				<option value="I" 	<?php echo $eselon == 'I'?'selected':'';?>>I</option>
				<option value="II" 	<?php echo $eselon == 'II'?'selected':'';?>>II</option>
				<option value="III" <?php echo $eselon == 'III'?'selected':'';?>>III</option>
				<option value="IV" 	<?php echo $eselon == 'IV'?'selected':'';?>>IV</option>				
				</select>				
				<span class="help-block"></span>
			</p>				
			
			<p>
				<label for="inputjabatan">JABATAN</label>
				<input type="text" class="form-control" required="required" id="inputjabatan" value="<?php echo !empty($jabatan)?$jabatan:'';?>" name="jabatan" placeholder="">
				<span class="help-block"></span>
			</p>					
				
			<p>
				<label for="inputbagian">BAGIAN</label>
				<select class="form-control" required="required" id="inputbagian" name="bagian" >
				<option>Please Select</option>
						<option value="Bag. Tata Usaha"				<?php echo $bagian == 'Bag. Tata Usaha'?'selected':'';?>>Bag. Tata Usaha</option>
						<option value="Sub. Bagian Umum"			<?php echo $bagian == 'Sub. Bagian Umum'?'selected':'';?>>Sub. Bagian Umum</option>
						<option value="Sub. Bagian Perencanaan"		<?php echo $bagian == 'Sub. Bagian Perencanaan'?'selected':'';?>>Sub. Bagian Perencanaan</option>
						<option value="Bidang Infokom"				<?php echo $bagian == 'Bidang Infokom'?'selected':'';?>>Bidang Infokom</option>
						<option value="Bidang Penindakan"			<?php echo $bagian == 'Bidang Penindakan'?'selected':'';?>>Bidang Penindakan</option>
						<option value="Bidang Pemeriksaan"			<?php echo $bagian == 'Bidang Pemeriksaan'?'selected':'';?>>Bidang Pemeriksaan</option>	
						<option value="Seksi Inspeksi"				<?php echo $bagian == 'Seksi Inspeksi'?'selected':'';?>>Seksi Inspeksi</option>	
						<option value="Seksi Sertifikasi"			<?php echo $bagian == 'Seksi Sertifikasi'?'selected':'';?>>Seksi Sertifikasi</option>	
						<option value="Bidang Pengujian"			<?php echo $bagian == 'Bidang Pengujian'?'selected':'';?>>Bidang Pengujian</option>	
						<option value="Seksi Peng. Microbiologi"	<?php echo $bagian == 'Seksi Peng. Microbiologi'?'selected':'';?>>Seksi Peng. Microbiologi</option>		
						<option value="Seksi Peng. Kimia"			<?php echo $bagian == 'Seksi Peng. Kimia'?'selected':'';?>>Seksi Peng. Kimia</option>		
						<option value="Loka Toba Samosir"			<?php echo $bagian == 'Loka Toba Samosir'?'selected':'';?>>Loka Toba Samosir</option>		
						<option value="Loka Tanjung Balai"			<?php echo $bagian == 'Loka Tanjung Balai'?'selected':'';?>>Loka Tanjung Balai</option>	
				</select>
				<span class="help-block"></span>
			</p>				

			<p>
				<label for="inputstatus">STATUS</label>
				<select class="form-control" required="required" id="inputstatus" name="status" >
				<option>Please Select</option>
				<option value="PNS" 	<?php echo $status == 'PNS'?'selected':'';?>>PNS</option>
				<option value="CPNS" 	<?php echo $status == 'CPNS'?'selected':'';?>>CPNS</option>
				</select>			
				<span class="help-block"></span>
			</p>				
				
			<p>
				<label for="inputdikstruk">DIKLAT STRUKTURAL</label>
				<input type="text" class="form-control" required="required" id="inputdikstruk" value="<?php echo !empty($dikstruk)?$dikstruk:'';?>" name="dikstruk" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>
				<label for="inputtadi">TAHUN DIKLAT</label>
				<input type="text" class="form-control" required="required" id="inputtadi" value="<?php echo !empty($tadi)?$tadi:'';?>" name="tadi" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>
				<label for="inputpropen">PROGRAM PENDIDIKAN</label>
				<input type="text" class="form-control" required="required" id="inputpropen" value="<?php echo !empty($propen)?$propen:'';?>" name="propen" placeholder="">
				<span class="help-block"></span>
			</p>			

			<p>
				<label for="inputprodi">PROGRAM STUDI</label>
				<input type="text" class="form-control" required="required" id="inputprodi" value="<?php echo !empty($prodi)?$prodi:'';?>" name="prodi" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>
				<label for="inputnase">NAMA SEKOLAH</label>
				<input type="text" class="form-control" required="required" id="inputnase" value="<?php echo !empty($nase)?$nase:'';?>" name="nase" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>
				<label for="inputtalu">TAHUN LULUS</label>
				<input type="text" class="form-control" required="required" id="inputtalu" value="<?php echo !empty($talu)?$talu:'';?>" name="talu" placeholder="">
				<span class="help-block"></span>
			</p>	

			<p>
				<label for="inputagama">AGAMA</label>
				<select class="form-control" required="required" id="inputagama" name="agama" >
				<option>Please Select</option>
				<option value="ISLAM" 				<?php echo $agama == 'ISLAM'?'selected':'';?>>				ISLAM</option>
				<option value="KRISTEN PROTESTAN" 	<?php echo $agama == 'KRISTEN PROTESTAN'?'selected':'';?>>	KRISTEN PROTESTAN</option>
				<option value="KRISTEN KATOLIK" 	<?php echo $agama == 'KRISTEN KATOLIK'?'selected':'';?>>	KRISTEN KATOLIK</option>
				<option value="BUDDHA" 				<?php echo $agama == 'BUDDHA'?'selected':'';?>>				BUDDHA</option>
				<option value="HINDU" 				<?php echo $agama == 'HINDU'?'selected':'';?>>				HINDU</option>
				<option value="KONGHUCU" 			<?php echo $agama == 'KONGHUCU'?'selected':'';?>>			KONGHUCU</option>				
				</select>		
				<span class="help-block"></span>
			</p>				
			
			<p>
				<label>KARTU PNS</label>
				<input type="file" class="form-control" name="file1">
				<span class="help-block"></span>
			</p>
			
			<p>
				<label>KARTU TASPEN</label>
				<input type="file" class="form-control" name="file2">
				<span class="help-block"></span>
			</p>

			<p>
				<label>SK</label>
				<input type="file" class="form-control" name="file3">
				<span class="help-block"></span>
			</p>			
    
			<p>
				<label>SK PENAIKAN PANGKAT</label>
				<input type="file" class="form-control" name="file4">
				<span class="help-block"></span>
			</p>

			<p>
				<label>FORMULIR SASARAN KERJA</label>
				<input type="file" class="form-control" name="file5" >
				<span class="help-block"></span>
			</p>

			<p>
				<label>KENAIKAN GAJI</label>
				<input type="file" class="form-control" name="file6" >
				<span class="help-block"></span>
			</p>

			<p>
				<label>KTP</label>
				<input type="file" class="form-control" name="file7">
				<span class="help-block"></span>
			</p>

			<p>
				<label>IJASAH</label>
				<input type="file" class="form-control" name="file8">
				<span class="help-block"></span>
			</p>

			<p>
				<label>SERTIFIKAT</label>
				<input type="file" class="form-control" name="file9">
				<span class="help-block"></span>
			</p>			
			
	
			<div class="form-actions"><center><center>
					<input type="submit" name="submit" class="btn button blue" value="PERBARUI">
					<a href="../tabel/index.php" class="btn button pink">KEMBALI</a>		
				</center>
				</div>
			</div>	
			
		</form>
		</div>
                
    </div> <!-- /row -->
</div> <!-- /container -->

</body>
</html>