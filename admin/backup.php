<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

include '../konek.php';
$tables = array();
$result = mysqli_query($konek,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}

$return = '';
foreach($tables as $table){
  $result = mysqli_query($konek,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($konek,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}

//save file
$handle = fopen("../backup/coba.sql","w+");
fwrite($handle,$return);
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
              <h2>sudah berhasil di simpan. </h2>			  
              <p>Jika suatu waktu data tersebut ingin dikembalikan,</p>
			  <p>silahkan pergi ke menu utama dan pilih restore database.</p><br><br>
              <h4>Saran : lakukan backup database setiap 2 minggu sekali </h4>
			  <h4>untuk keamanan sistem. Terima kasih.</h4>
              <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
        	  <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
        	</svg>
            </div>
          </div>
      </div>

	<img class="wave" src="">
	<div class="container">
		<div class="img">
			<img src="../assets/images/hi.gif">
		</div>
		
		<div class="login-content">
			<form action="index.php">
				<h2 class="title">Backup data berhasil</h2>
				<h3 class="title">Data yang ada di website sudah berhasil disimpan.</h3>				
				<h5 class="title">Silahkan check filenya di folder sistem HTDOCS :-)</h5>				
				
				
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