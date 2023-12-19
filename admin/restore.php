    <?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	
	include '../konek.php';
    $filename 	= '../backup/coba.sql';
    $handle 	= fopen($filename,"r+");
    $contents 	= fread($handle,filesize($filename));
    $sql 		= explode(';',$contents);
	
    foreach($sql as $query){
      $result 	= mysqli_query($konek,$query);
      if($result){
      }
    }
    fclose($handle);
	?>

<!DOCTYPE html>
<html>
<head>

		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" 	content="IE=edge">		
		<meta name="viewport" 				content="width=device-width, initial-scale=1">
		<meta name="description" 			content="SIFPEG WEB">
		<meta name="author" 				content="Andreas Silitonga">
    
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SIFPEG WEB | BPOM.GO.ID</title>
	
	<!-- CSS -->	
	<link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/modalanimate.css">	
	
</head>
<body>

    <div id="modal-container">
          <div class="modal-background">
            <div class="modal">
              <h2>Data yang ada di sistem</h2>
              <h2>sudah berhasil di kembalikan.</h2>
              <p>Saran : pastikan anda sudah melakukan backup database terlebih dahulu, </p>
              <p>agar data bisa dikembalikan. Jikalau anda belum melakukan backup database,  </p>
              <p>maka tombol restore database tidak akan mengembalikan apapun/error.</h4>			  
              <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
        	  <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
        	</svg>
            </div>
          </div>
      </div>

	<img class="wave" src="">
	<div class="container">
		<div class="img">
			<img src="../assets/images/data.gif">
		</div>
		
		<div class="login-content">
			<form action="index.php">
				<h2 class="title">Restore data berhasil</h2>
				<h3 class="title">Data yang ada di website sudah berhasil dikembalikan.</h3>				
				<h5 class="title">Silahkan check hasilnya di database PHPMYADMIN :-)</h5>				
				
				
				<br>
            	<a data-effect="unfolding" id="unfolding" class="button" href="#unfolding">Baca Panduan</a>
            	<input type="submit" class="btn" value="Kembali">
            </form>
			
        </div>
    </div>
	
		<!-- Jquerry Modal -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="../assets/js/modalAnimate.js"></script>	
        
		<script>
            //demo 01
            $("#unfolding").modalAnimate();

            //demo 02
            $(document).off('click', '.button')
            $(document).on('click', '.button', function(event){
              event.preventDefault();
              var btnEffect = $(this).data('effect')
          
              $(this).modalAnimate({
                modalTarget:'modal-container',
                effect:$(this).data('effect'),
                autoEffect:true
              });

            })
        </script>
		<!-- Penutup Jquerry Modal -->		

		<!-- Jquerry Button Efek -->		
		<script type="text/javascript" src="../assets/js/main.js"></script>
		<!-- Penutup Jquerry Button Efek -->		
		
</body>
</html>