<?php 
    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];

    $back_dir    = "../datascan/FORMULIR_SASARAN_KERJA/";
    $file 		 = $back_dir.$_GET['filename'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=FORMULIR_SASARAN_KERJA.pdf');
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            exit;
        } 
		
        else {
            $_SESSION['pesan'] = "Uups! File Dengan Nama - $filename - Tidak Ditemukan ...";
            header("location:index.php");
        }
		}
?>