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
		
        <section class="hero is-fullheight is-default is-bold">
            <nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="index.php">
                            <img src="../assets/images/logos/logo_text.png" alt="" width="112" height="28">
                        </a>
            
                        <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                            <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                <svg width="1000px" height="1000px">
                                    <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path class="path2" d="M 300 500 L 700 500"></path>
                                    <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                                <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                            </div>
                        </a>
            
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
            
                    <div id="navbar-menu" class="navbar-menu is-static">
            
                        <div class="navbar-start">
                            <a class="navbar-item is-hidden-mobile">
                                <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a>
                        </div>
            
                        <div class="navbar-end">
                            <a href="backup.php" class="navbar-item is-secondary">
                                Backup
                            </a>
							
                            <a href="restore.php" class="navbar-item is-secondary">
                                Restore
                            </a>
							
                            <a href="panduan.php" class="navbar-item is-secondary modal-trigger">
                                Panduan
                            </a>
							
                            <a href="logout.php" class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Logout
                                </span>
                            </a>
							
                        </div>
                    </div>
                </div>
            </nav>
			
            <nav id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="index.php">
                            <img src="../assets/images/logos/logo_text.png" alt="" width="112" height="28">
                        </a>
            
                        <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                            <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                <svg width="1000px" height="1000px">
                                    <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path class="path2" d="M 300 500 L 700 500"></path>
                                    <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                                <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                            </div>
                        </a>
            
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="cloned-navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
            
                    <div id="cloned-navbar-menu" class="navbar-menu is-fixed">
            
                        <div class="navbar-start">
                            <a class="navbar-item is-hidden-mobile">
                                <div id="cloned-menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="cloned-menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a>
                        </div>
            
                        <div class="navbar-end">
                            <a href="backup.php" class="navbar-item is-secondary">
                                Backup
                            </a>
							
                            <a href="restore.php" class="navbar-item is-secondary">
                                Restore
                            </a>
							
                            <a href="panduan.php" class="navbar-item is-secondary modal-trigger" data-modal="auth-modal">
                                Panduan
                            </a>
							
                            <a href="logout.php" class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Logout
                                </span>
                            </a>
							
                        </div>
                    </div>
                </div>
            </nav>
			
			
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column is-5 is-offset-1 landing-caption">
                            <h1 class="title is-1 is-bold is-spaced">
                                Hai, Selamat Datang
                            </h1>
							
                            <h2 class="subtitle is-5 is-muted">Ini merupakan situs resmi sistem informasi pegawai balai pengawas obat dan makanan kota medan </h2>
                           
						   <div class="button-wrap">
                                <a class="button cta is-rounded button yellow" href="../tabel/index.php">
                                    Pegawai
                                </a>
								
                                <a class="button cta is-rounded button blue" href="../import/index.php">
                                    Import
                                </a>	
                            </div>
							
						   <div class="button-wrap">
                                <a class="button cta is-rounded button mint" href="export.php">
                                    Export
                                </a>
								
                                <a class="button cta is-rounded button pink" href="print.php">
                                    Print
                                </a>	
                            </div>							
							
                        </div>
						
						
                        <div class="column is-5">
                            <figure class="image is-4by3">
                                <img src="../assets/images/illustrations/worker.svg" alt="SIFPEG WEB">
                            </figure>
                        </div>
        
                    </div>
                </div>
            </div>
		
        <!-- Tombol Kembali ke Atas -->
        <div id="backtotop"><a href="#"></a></div>  
		
        <!-- Sidebar Menu Bantuan -->			
		<div class="sidebar">
            <div class="sidebar-header">
                <a class="sidebar-close" href="javascript:void(0);"><i data-feather="x"></i></a>
            </div>
		
            <div class="inner">
                <ul class="sidebar-menu">
                    <li><span class="nav-section-title"></span></li>

					<!-- Tombol bawahnya aku hapus di core.css dibagian material-icons -->						
                    <li class="have-children">
					<li><a href="index.php">
                        <span class="material-icons">home</span>
                        <span>Beranda</span>
						</a>
                    </li>
					</li>
					
                    <li class="have-children"><a href="#">
                        <span class="material-icons">apps</span>
                        <span>Fitur Web</span>
						</a>
                        <ul>
                            <li><a href="https://compresspng.com" 			target="_blank">Konversi Gambar</a></li>
                            <li><a href="https://convertio.co/id/pdf-doc" 	target="_blank">Konversi Dokumen</a></li>
                            <li><a href="#">Chatt</a></li>
                        </ul>
                    </li>
					
                    <li class="have-children">
                        <a href="#">
                            <span class="material-icons">link</span>
                            <span>Kunjungan Situs</span>
                        </a>	
                        <ul>
                            <li><a href="https://siasn.pom.go.id" 	target="_blank">Website SIASN</a></li>
                            <li><a href="https://www.pom.go.id" 	target="_blank">Website BPOM Pusat</a></li>
                            <li><a href="https://medan.pom.go.id" 	target="_blank">Website BPOM Medan</a></li>
                        </ul>
                    </li>	
            </div>	
        </div>        
		
		<!-- Concatenated JS -->
        <script src="../assets/js/app.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        
        <!-- Fresh JS -->
        <script src="../assets/js/functions.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>  
</html>