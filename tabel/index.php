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

	<!-- CSS Tombol ToTop -->	
    <link rel="stylesheet" href="../assets/css/top.css">	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	

	<!-- CSS Header -->	
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/kembali.css">	
	
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/typeahead.js"></script>
	
	<!-- CSS Tombol -->	
	<link rel="stylesheet" href="../assets/css/tombol.css">	
	
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
	
<div class="container">
	<div class="btn-toolbar">
		<a class="btn button yellow" 	href="../input/index.php"><i class="icon-plus"></i> Tambah Data Tabel </a>
		<a class="btn button blue" 		href="../import/index.php"><i class="icon-plus"></i> Import Excel</a>
		<a class="btn button mint" 		href="../admin/export.php"><i class="icon-plus"></i> Export Excel</a>		
		<a class="btn button pink" 		href="../admin/print.php"><i class="icon-plus"></i> Cetak Tabel</a>		
	</div>	
</div>

	
  <div class="col-md-12">
  <?php 
  //menghitung data yang akan di tampilkan pada tabel
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  $perhalaman		= 20;
  $data				= mysqli_query($konek,"select * from mahasiswa");
  $jum				= mysqli_num_rows($data);
  $halaman			= ceil($jum/$perhalaman);
  $page				= (isset($_GET['page']))?(int)$_GET['page']:1;
  $start			= ($page - 1) * $perhalaman;
  ?>
  
<div class="container table-responsive">
	<div class ="row">
		<div class="col-md-15">
            <div class="input-group">
            <input type="text" name="txtCountry" id="txtCountry" class="form-control input-sm mb-10 typeahead" placeholder="Cari Data..." autocomplete="off">
            <span class="input-group-addon" title="" data-original-title="" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Cari Berita Berdasarkan Judul">Tekan Enter</span>
            </div>  
			
<div class="container table-responsive">
	<div class ="row">
		<div class="col-md-15">
			<table class="table table-striped table-bordered table-hover table-responsive" id="tabel_siswa">
				<tr>
					<th>NIP</th>
					<th>Nama</th>	
					<th>Usia</th>
					<th>Jenis Kelamin</th>		
					<th>Status</th>				
					<th>Golongan</th>
					<th>Bagian</th>				
					<th>Lihat Berkas</th>			
					<th>Download Berkas</th>					
					<th>Aksi</th>						
				</tr>
				</thead>
				
				<tbody>   
				<?php
					include 	'../konek.php';
					$data2  	= "select * from mahasiswa order by nip LIMIT $start,$perhalaman";
					$res    	= mysqli_query($konek,$data2);
					while($row	= mysqli_fetch_array($res)){
						
						echo '<tr>';
						echo '<td>'. $row['nip'] . 				'</td>';
						echo '<td>'. $row['nama'] . 			'</td>';						
						echo '<td>'. $row['usia'] . 			'</td>';
						echo '<td>'. $row['jenkel'] . 			'</td>';	
						echo '<td>'. $row['status'] . 			'</td>';
						echo '<td>'. $row['golongan'] . 		'</td>';						
						echo '<td>'. $row['bagian'] . 			'</td>';	
			
						echo '<td><a class="btn btn-xs btn-success" target="_blank" href="../datascan/KARTU_PNS/'. 				$row['file1'] 		. 	'">Lihat KARTU PNS</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KARTU_TASPEN/'. 			$row['file2'] 		.	'">Lihat KARTU TASPEN</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SK/'. 					$row['file3'] 		.	'">Lihat SK</a>
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SK_PENAIKAN_PANGKAT/'. 	$row['file4'] 		.	'">Lihat SK PENAIKAN PANGKAT</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/FORMULIR_SASARAN_KERJA/'. $row['file5'] 		.	'">Lihat FORMULIR SASARAN KERJA</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KENAIKAN_GAJI/'. 			$row['file6'] 		.	'">Lihat KENAIKAN GAJI</a>								  
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KTP/'. 					$row['file7'] 		.	'">Lihat KTP</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/IJASAH/'. 				$row['file8'] 		.	'">Lihat IJASAH</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SERTIFIKAT/'. 			$row['file9'] 		.	'">Lihat SERTIFIKAT</a>		
								  </td>';	
							  
						echo '<td>
								  <a class="btn btn-xs btn-warning" href="../download/download1.php?filename='. 					$row['file1'] 		. 	'">Download KARTU PNS</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download2.php?filename='. 					$row['file2'] 		. 	'">Download KARTU TASPEN</a>
								  <a class="btn btn-xs btn-warning" href="../download/download3.php?filename='. 					$row['file3'] 		. 	'">Download SK</a>						
								  <a class="btn btn-xs btn-warning" href="../download/download4.php?filename='. 					$row['file4'] 		. 	'">Download SK PENAIKAN PANGKAT</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download5.php?filename='. 					$row['file5'] 		. 	'">Download FORMULIR SASARAN KERJA</a>
								  <a class="btn btn-xs btn-warning" href="../download/download6.php?filename='. 					$row['file6'] 		. 	'">Download KENAIKAN GAJI</a>		
								  <a class="btn btn-xs btn-warning" href="../download/download7.php?filename='. 					$row['file7'] 		. 	'">Download KTP</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download8.php?filename='. 					$row['file8'] 		. 	'">Download IJASAH</a>
								  <a class="btn btn-xs btn-warning" href="../download/download9.php?filename='. 					$row['file9'] 		. 	'">Download SERTIFIKAT</a>										  
								  </td>';						

						echo '<td>
								  
								  <a class="btn btn-sm btn-info" 	href="read.php?nip='. 				$row['nip'] 		. 	'">Lihat Data</a><br><br>								  
								  <a class="btn btn-sm btn-primary" href="update.php?nip='. 			$row['nip'] 		. 	'">Edit</a><br><br>
								  <a class="btn btn-sm btn-danger" 	href="delete.php?nip='. 			$row['nip'] 		. 	'">Hapus</a><br>	  
							  </td>';
							  
						echo '</tr>';
					}
				?>
		 		</tbody>
			</table>				
				
	<!-- Hapus aja <!> untuk mengaktifkan tombol kembali 	
<a href="../admin/index.php" class="scroll bottom">Kembali</a> 					

-->	
	
			
<!-- star koding nomor halaman-->
  <div class="col-md-12" align="center">
    <ul class="pagination">
    <?php if ($page>1) { ?>
    <li>
      <a href="?page=<?php echo $page - 1; ?>" aria-label="Sebelumnya">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
	
      <?php }else{ ?> <li class="disabled">
      <a href="?page=<?php echo $page; ?>" aria-label="Sebelumnya">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> 
	
	
	<?php } ?>
	
    <?php 
    for ($x=1; $x<=$halaman ; $x++) {
      if ($page==$x) {
        $ini="active";
      }else{$ini="";}
    ?>
	
    <li class="<?php echo "$ini"; ?>">
	<a href="?page=<?php echo "$x"; ?>">
	<?php echo "$x"; ?></a></li>
	
   <?php  } ?>
    
	<li>
	<a class="btn btn-xs btn-danger" 	href="../admin/index.php">Menu Utama</a>		
    <a href="?page=<?php echo $page + 1; ?>" aria-label="Selanjutnya">
    <span aria-hidden="true">&raquo;</span>
    </a>
	</li>
    </ul>
	</div>

    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>	
	
<script type="text/javascript" src="../assets/js/top.js"></script>	

<script>
$(document).ready(function () {
  $('#txtCountry').typeahead({
    source: function (query, result) {
      $.ajax({
        url: "search.php",
        data: 'query=' + query,
        dataType: "json",
        type: "POST",
        success: function (data) {
          result($.map(data, function (item) {
            return item;
          }));
        }
      });
    }
  });

});

/*Pencarian*/
$(document).ready(function(){

  $(document).on('change', '#txtCountry', function(){
   var se = this.value;
   $.ajax({
    url:"result.php",
    method:"POST",
    data:{se:se},
    success:function(data){
     $('#tabel_siswa').html(data);

   }
 })
 });

});
</script>

	
</body>
</html>