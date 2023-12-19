<?php
error_reporting(0);
include "../konek.php";
$page 		= '';
$output 	= '';
$se			= $_POST['se'];

$query 		= "SELECT * FROM mahasiswa where nip LIKE '%$se%' order by nip LIMIT 20";
$result 	= mysqli_query($konek,$query);
$jumlah		= mysqli_num_rows($result);

if($jumlah < 1){
$output .='<div class="table-responsive">
    <table class="table table-bordered">
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
        <tr><td colspan="4">Tidak Ditemukan Data Yang Sesuai Dengan Kata Kunci Yang Anda Masukan</td></tr>
    </table>
</div>';
}

else{
$output .='<div class="table-responsive">
    <table class="table table-bordered">
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
        </tr>';
		
        while($row = mysqli_fetch_array($result))
        {
        $output .= '
        <tr>
						<tr>
						<td>'. $row['nip'] . 				'</td>
						<td>'. $row['nama'] . 				'</td>						
						<td>'. $row['usia'] . 				'</td>
						<td>'. $row['jenkel'] . 			'</td>	
						<td>'. $row['status'] . 			'</td>
						<td>'. $row['golongan'] . 			'</td>						
						<td>'. $row['bagian'] . 			'</td>					
						
						<td>
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KARTU_PNS/'. 				$row['file1'] 		. 	'">Lihat KARTU PNS</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KARTU_TASPEN/'. 			$row['file2'] 		.	'">Lihat KARTU TASPEN</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SK/'. 					$row['file3'] 		.	'">Lihat SK</a>
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SK_PENAIKAN_PANGKAT/'. 	$row['file4'] 		.	'">Lihat SK PENAIKAN PANGKAT</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/FORMULIR_SASARAN_KERJA/'. $row['file5'] 		.	'">Lihat FORMULIR SASARAN KERJA</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KENAIKAN_GAJI/'. 			$row['file6'] 		.	'">Lihat KENAIKAN GAJI</a>								  
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/KTP/'. 					$row['file7'] 		.	'">Lihat KTP</a>		
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/IJASAH/'. 				$row['file8'] 		.	'">Lihat IJASAH</a>			
								  <a class="btn btn-xs btn-success" target="_blank" href="../datascan/SERTIFIKAT/'. 			$row['file9'] 		.	'">Lihat SERTIFIKAT</a>		
						</td>	
							  
						<td>
								  <a class="btn btn-xs btn-warning" href="../download/download1.php?filename='. 					$row['file1'] 		. 	'">Download KARTU PNS</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download2.php?filename='. 					$row['file2'] 		. 	'">Download KARTU TASPEN</a>
								  <a class="btn btn-xs btn-warning" href="../download/download3.php?filename='. 					$row['file3'] 		. 	'">Download SK</a>						
								  <a class="btn btn-xs btn-warning" href="../download/download4.php?filename='. 					$row['file4'] 		. 	'">Download SK PENAIKAN PANGKAT</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download5.php?filename='. 					$row['file5'] 		. 	'">Download FORMULIR SASARAN KERJA</a>
								  <a class="btn btn-xs btn-warning" href="../download/download6.php?filename='. 					$row['file6'] 		. 	'">Download KENAIKAN GAJI</a>		
								  <a class="btn btn-xs btn-warning" href="../download/download7.php?filename='. 					$row['file7'] 		. 	'">Download KTP</a>	
								  <a class="btn btn-xs btn-warning" href="../download/download8.php?filename='. 					$row['file8'] 		. 	'">Download IJASAH</a>
								  <a class="btn btn-xs btn-warning" href="../download/download9.php?filename='. 					$row['file9'] 		. 	'">Download SERTIFIKAT</a>										  
								  </td>						

						<td>
								  
								  <a class="btn btn-sm btn-info" 	href="read.php?nip='. 				$row['nip'] 		. 	'">Lihat Data</a><br><br>								  
								  <a class="btn btn-sm btn-primary" href="update.php?nip='. 			$row['nip'] 		. 	'">Edit</a><br><br>
								  <a class="btn btn-sm btn-danger" 	href="delete.php?nip='. 			$row['nip'] 		. 	'">Hapus</a><br>	  
						</td>

        </tr>
		
        ';
        }
        $output .= '
    </table>
</div>';

}
echo $output;
?>