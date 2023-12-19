<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan 
include '../konek.php';

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//  menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//  jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
		
//  kosongkan tabel pegawai
    $truncate ="TRUNCATE TABLE mahasiswa";
    mysqli_query($konek,$truncate);
    };
    
//  import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//  membaca data (kolom ke-1 sd terakhir)
      $nip           	= $data->val($i, 1);
      $nama   			= $data->val($i, 2);
      $tela  			= $data->val($i, 3);
      $tala           	= $data->val($i, 4);
      $usia   			= $data->val($i, 5);
      $jenkel  			= $data->val($i, 6);
      $tmtcpns          = $data->val($i, 7);
      $mkp   			= $data->val($i, 8);
      $golongan  		= $data->val($i, 9);
      $tmtgol           = $data->val($i, 10);
      $mkg   			= $data->val($i, 11);
      $eselon  			= $data->val($i, 12);
      $jabatan          = $data->val($i, 13);
      $bagian   		= $data->val($i, 14);
      $status  			= $data->val($i, 15);
      $dikstruk         = $data->val($i, 16);
      $tadi   			= $data->val($i, 17);
      $propen  			= $data->val($i, 18);	  
      $prodi   			= $data->val($i, 19);
      $nase  			= $data->val($i, 20);
      $talu           	= $data->val($i, 21);
      $agama   			= $data->val($i, 22); 	  

//    setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into mahasiswa (nip, nama, tela, tala, usia, jenkel, tmtcpns, mkp, golongan, tmtgol, mkg, eselon, jabatan, bagian, status, dikstruk, tadi, propen, prodi, nase, talu, agama)
	  values('$nip', '$nama', '$tela', '$tala', '$usia', '$jenkel', '$tmtcpns', '$mkp', '$golongan', '$tmtgol', '$mkg', '$eselon', '$jabatan', '$bagian', '$status', '$dikstruk', '$tadi', '$propen', '$prodi', '$nase', '$talu', '$agama')";
      $hasil = mysqli_query($konek,$query);
    }
    
    if(!$hasil){
//  jika import gagal
    die(mysqli_connect_error());
    }
	  
	else{
//  jika impor berhasil
	echo '<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>Data sudah berhasil di import! silahkan lihat datanya dengan mengklik tombol</b> : <b>check data</div>';	
    }
    
//  hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
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
	
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
    
<style>
body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	padding: 15px ;	
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 0 0;
	cursor: pointer;
	transition: .5s;
}

.btn:hover{
	background-position: right;
}

body:before {
	content: '';
	position: fixed;
	top: 0;
	bottom: 0;
	width: 100%;
	z-index: -1;
}

.post-body {
	max-width: 768px;
	margin: 4% auto;
	padding: 20px;
	background: #fff;
	color: #222;
	font-size: 16px;
	line-height: 1.6;
	box-shadow:0 5px 5px 1px rgba(0,0,0,0.15)
}

.post-body h1,.post-body h2 {
	display: block;
	margin: 40px auto;
	font-size: 1.7rem;
	font-weight: 700;
	color: #222;
	text-align:center;
}

.container h2 {
   margin-top: 30px;
}

.box {
  width: 40%;
  margin: 0 auto;
  padding: 35px;
  text-align: center;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}

.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: 'Poppins', sans-serif;
}

.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}

.popup .close:hover {
  color: #06D85F;
}

.popup .content {
  max-height: 30%;
  overflow: auto;
}

.input-lg {
    height: 50px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}
</style>

</head>
<body>

	<div class="container" style="margin-top:80px;">
		<div class="well text-center">
			<h1>Import file dengan cepat</h1>
			<hr>
			
			<div class="col-md-8 col-md-offset-2">
			<form  class="form-inline" name="myForm" id="myForm" onSubmit="return validateForm()" action="index.php" method="post" enctype="multipart/form-data">
			
					<div class="input-group">
						<label class="input-group-btn">
							<span class="btn btn-lg">
								Pilih File&hellip; <input type="file" id="filepegawaiall" name="filepegawaiall" style="display: none;" required="required">
							</span>
						</label>
						
						<input type="text" class="form-control input-lg" size="40" readonly required>
					</div>
					
					<div class="input-group">  
					<label><input type="checkbox" name="drop" value="1" /><u>Kosongkan Data Tabel Pegawai? (ceklis jika iyah)</u> </label><br>
						<br><center><input type="submit"  name="submit" class="btn btn-lg " value="Mulai Import"><br>
						<a class="btn btn-lg " href="../tabel/index.php"> Check Data </a></center>	

		<center><br/><br/><br/><a href="#myModal" role="button" data-toggle="modal" data-target="#modalForm">Baca Panduan</a></center>						

    <!-- Modal -->
    <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Ada 2 jenis import yang perlu diperhatikan :</h4>
                </div>
				
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                        <div class="form-group">
					<h3>1. Tanpa ceklis  : mengupload file ke sistem<br> (syarat : gunakan file excel sebelumnya yang datanya sudah ditambah).</h3>
					<h3>2. Dengan ceklis : menghapus data sebelumya lalu di input ulang kembali dengan data baru.</h3>
                </div>
                    </form>
                </div>
			
                <!-- Tombol Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
				</div>
				</div>
				</div>
				<!-- Tutup Modal -->		
		
					</div>
				</form>	

				<br>
				<div class="progress" style="display:none">
					<div id="progressBar" class="progress-bar progress-bar-striped active"></div>
				</div>
				
				<div class="msg alert alert-info text-left" style="display:none"></div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>				

<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>

    <script>
	$(function() {
	  $(document).on('change', ':file', function() {
		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	  });

	  $(document).ready( function() {
		  $(':file').on('fileselect', function(event, numFiles, label) {

			  var input = $(this).parents('.input-group').find(':text'),
				  log = numFiles > 1 ? numFiles + ' files selected' : label;

			  if( input.length ) {
				  input.val(log);
			  } else {
				  if( log ) alert(log);
			  }

		  });
	  });
	  
	});
	</script>
	</body>
	</html>