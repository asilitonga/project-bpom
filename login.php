    <?php 
		session_start();	
		include 'konek.php';
     
        $username 	= $_POST['username'];
        $password 	= md5($_POST['password']);
     
        $login 		= mysqli_query($konek,"SELECT * FROM user WHERE username='$username' and password='$password'");
        $cek 		= mysqli_num_rows($login);
     
        if($cek > 0){
            session_start();
            $_SESSION['username'] 	= $username;
            $_SESSION['status'] 	= "login";
            header("location:admin/index.php");
        }
		
        else{
            header("location:index.php?pesan=gagal"); 
        }
    ?>
