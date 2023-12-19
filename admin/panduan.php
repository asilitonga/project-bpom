<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" 	content="IE=edge">		
		<meta name="viewport" 				content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" 			content="SIFPEG WEB">
		<meta name="author" 				content="Andreas Silitonga">

		<title>SIFPEG WEB | BPOM.GO.ID</title>
		
		<!-- Ikon Web -->
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">

        <!--CSS Offline -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bulma.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/core.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/tombol.css">		
		
        <!--CSS Online -->		
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="preloader">
            <div id="status"></div>
        </div>        
        
        <section class="section is-medium  has-background-image" data-background="../assets/images/chuseok.png" data-color="#eee" data-color-opacity=".6">
            <div class="overlay"></div>
        
                    <div class="columns is-vcentered">
					
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">1. Pegawai</h2>
                                <blockquote>
                                    Tombol untuk melihat semua daftar data nama pegawai yang ada didalam sistem web.
                                </blockquote>
                            </figure>
                        </div>
						
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">2. Tambah</h2>							
                                <blockquote>
                                    Tombol untuk menambah data pegawai kedalam sistem web.
                                </blockquote>
                            </figure>
                        </div>
						
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">3. Print</h2>								
                                <blockquote>
                                   Print berfungsi untuk mencetak data tabel yang ada didalam sistem web ke dalam bentuk PDF.
                                </blockquote>
                            </figure>
                        </div>						
                </div>
            </div>
        
                <div class="content-wrapper">
                    <div class="columns is-vcentered">
					
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">4. Export</h2>								
                                <blockquote>
                                    Tombol untuk mengambil semua tabel data pegawai yang ada didalam sistem web untuk dipindahkan ke excel.
                                </blockquote>
                            </figure>
                        </div>
						
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">5. Import</h2>								
                                <blockquote>
                                    Tombol untuk memasukkan data file excel ke sistem web. Contohnya : anda mempunyai tabel data pegawai bertype excel yang ingin dimasukkan ke sistem web, anda hanya cukup klik tombol import > import data > pilih file excelnya > tunggu proses importnya > maka file excel tabel data pegawai tadi sudah berhasil dimasukkan kedalam sistem.
									Cukup mudah bukan?. Syarat file: harus berformat .xls (excel 2003-2010)
                                </blockquote>
                            </figure>
                    </div>						
						
                        <div class="column is-4">
                            <figure class="testimonial">
                    <h2 class="title is-2 black-text is-spaced">6. Backup</h2>								
                                <blockquote>
                                    Tombol untuk menyimpan semua data masukkan dan data sistem ke dalam 1 file .SQL, seperti data pegawai, data sk, data sistem, dll. Jadi kalau misalnya website ini sistemnya rusak,diretas atau pengen dikembangkan lagi, admin bisa mengembalikan semua datanya seperti semula.
                                </blockquote>
                            </figure>
                    </div>
                </div>
            </div>
        </section>			
		
        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>        
		
		<!-- Concatenated JS -->
        <script src="../assets/js/app.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        
        <!-- Fresh JS -->
        <script src="../assets/js/functions.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>  
</html>