<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../konek.php';
session_start();

	// membuat variabel untuk menampung data dari form
			$nip			= $_POST['nip'];
			$nama			= $_POST['nama'];
			$tela			= $_POST['tela'];
			$tala			= $_POST['tala'];
			$usia			= $_POST['usia'];
			$jenkel			= $_POST['jenkel'];		
			$tmtcpns		= $_POST['tmtcpns'];
			$mkp			= $_POST['mkp'];
			$golongan		= $_POST['golongan'];
			$tmtgol			= $_POST['tmtgol'];
			$mkg			= $_POST['mkg'];
			$eselon			= $_POST['eselon'];	
			$jabatan		= $_POST['jabatan'];
			$bagian			= $_POST['bagian'];
			$status			= $_POST['status'];
			$dikstruk		= $_POST['dikstruk'];
			$tadi			= $_POST['tadi'];
			$propen			= $_POST['propen'];	
			$prodi			= $_POST['prodi'];
			$nase			= $_POST['nase'];
			$talu			= $_POST['talu'];
			$agama			= $_POST['agama'];	
			
			$file1 			= $_FILES['file1']['name'];
			$file2 			= $_FILES['file2']['name'];			
			$file3 			= $_FILES['file3']['name'];
			$file4 			= $_FILES['file4']['name'];	
			$file5 			= $_FILES['file5']['name'];
			$file6 			= $_FILES['file6']['name'];	
			$file7 			= $_FILES['file7']['name'];
			$file8 			= $_FILES['file8']['name'];	
			$file9 			= $_FILES['file9']['name'];		

	$limit = 10 * 1024 * 1024; //10MB. Bisa diubah2

	if(isset($_FILES['file1'])){
	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file1']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file1 		= $_FILES['file1']['name'][$i];
		$tmp1 		= $_FILES['file1']['tmp_name'][$i];
		$type 		= $_FILES['file1']['type'][$i];
		$error 		= $_FILES['file1']['error'][$i];
		$size 		= $_FILES['file1']['size'][$i];
		
	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file2']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file2 		= $_FILES['file2']['name'][$i];
		$tmp2 		= $_FILES['file2']['tmp_name'][$i];
		$type 		= $_FILES['file2']['type'][$i];
		$error 		= $_FILES['file2']['error'][$i];
		$size 		= $_FILES['file2']['size'][$i];	

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file3']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file3 		= $_FILES['file3']['name'][$i];
		$tmp3 		= $_FILES['file3']['tmp_name'][$i];
		$type 		= $_FILES['file3']['type'][$i];
		$error 		= $_FILES['file3']['error'][$i];
		$size 		= $_FILES['file3']['size'][$i];		

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file4']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file4 		= $_FILES['file4']['name'][$i];
		$tmp4 		= $_FILES['file4']['tmp_name'][$i];
		$type 		= $_FILES['file4']['type'][$i];
		$error 		= $_FILES['file4']['error'][$i];
		$size 		= $_FILES['file4']['size'][$i];		

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file5']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file5 		= $_FILES['file5']['name'][$i];
		$tmp5 		= $_FILES['file5']['tmp_name'][$i];
		$type 		= $_FILES['file5']['type'][$i];
		$error 		= $_FILES['file5']['error'][$i];
		$size 		= $_FILES['file5']['size'][$i];		

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file6']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file6 		= $_FILES['file6']['name'][$i];
		$tmp6 		= $_FILES['file6']['tmp_name'][$i];
		$type 		= $_FILES['file6']['type'][$i];
		$error 		= $_FILES['file6']['error'][$i];
		$size 		= $_FILES['file6']['size'][$i];		

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file7']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file7 		= $_FILES['file7']['name'][$i];
		$tmp7 		= $_FILES['file7']['tmp_name'][$i];
		$type 		= $_FILES['file7']['type'][$i];
		$error 		= $_FILES['file7']['error'][$i];
		$size 		= $_FILES['file7']['size'][$i];		

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file8']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file8 		= $_FILES['file8']['name'][$i];
		$tmp8 		= $_FILES['file8']['tmp_name'][$i];
		$type 		= $_FILES['file8']['type'][$i];
		$error 		= $_FILES['file8']['error'][$i];
		$size 		= $_FILES['file8']['size'][$i];				

	//karena ada multiple, jadi dilakukan pengecekan foreach
	$jumlahFile = count($_FILES['file9']['name']);
	for($i=0; $i<$jumlahFile; $i++){
		
		$file9 		= $_FILES['file9']['name'][$i];
		$tmp9 		= $_FILES['file9']['tmp_name'][$i];
		$type 		= $_FILES['file9']['type'][$i];
		$error 		= $_FILES['file9']['error'][$i];
		$size 		= $_FILES['file9']['size'][$i];				
		
		//lakukan pengecekan disini
		if($size > $limit){
			$_SESSION['error'] = 'Ukuran file yang diupload melebihi yang diizinkan';
			header('location: index.php');			
			exit();
		}

		if($error < 0){
			$_SESSION['error'] = 'Upload gagal ('.$error.')';
			header('location: index.php');
			exit();
		}


		//kalau pengecekan sudah selesai, langsung proses
		move_uploaded_file($tmp1, '../datascan/KARTU_PNS/'.$file1);
		move_uploaded_file($tmp2, '../datascan/KARTU_TASPEN/'.$file2);
		move_uploaded_file($tmp3, '../datascan/SK/'.$file3);
		move_uploaded_file($tmp4, '../datascan/SK_PENAIKAN_PANGKAT/'.$file4);
		move_uploaded_file($tmp5, '../datascan/FORMULIR_SASARAN_KERJA/'.$file5);
		move_uploaded_file($tmp6, '../datascan/KENAIKAN_GAJI/'.$file6);
		move_uploaded_file($tmp7, '../datascan/KTP/'.$file7);
		move_uploaded_file($tmp8, '../datascan/IJASAH/'.$file8);
		move_uploaded_file($tmp9, '../datascan/SERTIFIKAT/'.$file9);
		
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO mahasiswa (nip, nama, tela, tala, usia, jenkel, tmtcpns, mkp, golongan, tmtgol, mkg, eselon, jabatan, bagian, status, dikstruk, tadi, propen, prodi, nase, talu, agama, file1,file2,file3,file4,file5,file6,file7,file8,file9) 
		VALUES ('$nip', '$nama', '$tela', '$tala', '$usia', '$jenkel', '$tmtcpns', '$mkp', '$golongan', '$tmtgol', '$mkg', '$eselon', '$jabatan', '$bagian', '$status', '$dikstruk', '$tadi', '$propen', '$prodi', '$nase', '$talu', '$agama', '$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$file9')";
        $result = mysqli_query($konek, $query);
		}

	$_SESSION['success'] = 'Berhasil mengupload seluruh file';
	header('location: index.php');	
	exit();

}
}
}
}
}
}
}
}
}
//kemungkinan nyampe kesini cuma kalau user ga upload apa2
$_SESSION['error'] = 'Silahkan upload file pdf yang diinginkan';
header('location: index.php');
?>