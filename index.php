	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>Login gagal! username dan password salah!</div>';	
		}
		else if($_GET['pesan'] == "logout"){
			echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>Anda telah berhasil logout!</div>';
		}
		else if($_GET['pesan'] == "belum_login"){
			echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>Anda harus login terlebih dahulu untuk bisa masuk ke menu utama!</div>';
		}
		}
	?>

<!DOCTYPE html>
<html>
<head>

		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" 	content="IE=edge">		
		<meta name="viewport" 				content="width=device-width, initial-scale=1.0">
		<meta name="description" 			content="SIFPEG WEB">
		<meta name="author" 				content="Andreas Silitonga">
	
	<title>SIFPEG WEB | BPOM.GO.ID</title>
	
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">	
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>	
	
<style type="text/css">
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
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
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

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
</head>
<body>

	<!-- Tombol Kontak Online -->
	<script data-align="right" data-overlay="false" 
	id="keyreply-script" src="//keyreply.com/chat/widget.js" 
	data-color="#f44336" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyMDg1NzYwODkwMTgyJTIyLCUyMnNtcyUyMjolMjIwODIyODI4Mzc1ODIlMjIsJTIycGhvbmUlMjI6JTIyMDgyMjgyODM3NTgyJTIyLCUyMmVtYWlsJTIyOiUyMmNocmlzdGlhbmFuZHJlYXM1NDRAZ21haWwuY29tJTIyJTdE"></script>
	<!-- Penutupnya -->   

	<img class="wave" src="assets/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/images/bg.svg">
		</div>
		
		<div class="login-content">
		  <form action="login.php" method="post" onSubmit="return validasi()">
				<img src="assets/images/avatar.svg">
				<h2 class="title">Welcome to </h2>
				<h4>Website <span class="type"></span></h4><br>
           		<div class="input-div one">

			<script type="text/javascript" src="assets/js/typed.js"></script>	
				
			<script>
			var typed = new Typed(".type", {
			  strings: [
			  "SIFPEG", 
			  "Arsip Data Pegawai"],
			typeSpeed:80,
			backSpeed:60,
			loop:true			
			});
			</script>			
			
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
			   
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
				
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
				   
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>				  
            	</div>				
				
            	<a href="#popup1" >Lupa Password?</a>
            	<input type="submit" class="btn" value="Login">
				
				
				<div id="popup1" class="overlay">
				 <div class="popup">
				  <h2>Maaf</h2>
				  <a class="close" href="#">&times;</a>
				  <div class="content">
				   Untuk mengganti atau membuat akun baru, harap hubungi admin dengan tombol kontak admin dibawah, Terima kasih.
				  </div>
				 </div>
				</div>
            </form>
			
			
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main2.js"></script>

</body>
</html>