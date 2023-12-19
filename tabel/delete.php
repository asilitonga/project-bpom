<?php
	require '../konek.php';
    $nip= null;
    if(!empty($_GET['nip']))
    {
        $nip = $_GET['nip'];
    }
    if($nip == null)
    {
        header("Location: index.php");
    } 
    if ( !empty($_POST))
    {
        
        // Delete Data
        $nip = $_POST['nip'];
       
        $query = "Delete from mahasiswa where nip=$nip";
		mysqli_query($konek,$query);
        header("Location: index.php");
    }
?>

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
	
	<!-- CSS Header -->	
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	
	<!-- CSS Tombol -->	
	<link rel="stylesheet" href="../assets/css/tombol.css">	
	
</head>
<body>

	<div class="container" style="margin-top:20px">
		<h2>Hapus Data</h2>
		<hr>	
		
		<form method="POST" action="delete.php">
			<input type="hidden" name="nip" value="<?php echo $nip;?>" />
			<p class="bg-danger" style="padding: 10px;">Apakah Anda Yakin Ingin Menghapus Data Ini ?</p>

			<div class="form-actions">
				<button type="submit" class="btn button blue">Iya</button>
				<a class="btn button pink" href="index.php">Tidak</a>
			</div>
		</form>
                
    </div> <!-- /row -->
</div> 
</body>
</html>
