<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tabel ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Pegawai.xls");
?>
    
<table border="1" cellpadding="0">
  <tr>
    <th>No</th>
    <th>NIP</th>
    <th>Nama</th>	
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Usia</th>
    <th>Jenis Kelamin</th>
    <th>TMT CPNS</th>
    <th>Masa Kerja PNS</th>
    <th>Golongan</th>
    <th>TMT Golongan</th>	
    <th>Masa Kerja Gol</th>
    <th>Eselon</th>
    <th>Jabatan</th>
    <th>Bagian</th>
    <th>Status</th>
    <th>Diklat Struktural</th>		
    <th>Tahun Diklat</th>
    <th>Program Pendidikan</th>
    <th>Program Studi</th>
    <th>Nama Sekolah</th>
    <th>Tahun Lulus</th>
    <th>Agama</th>		
  </tr>
  
  <?php
  // Load file koneksi.php
  include '../konek.php';
  
  // Buat query untuk menampilkan semua data siswa
  $sql = mysqli_query($konek,"select * from mahasiswa");
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['nip']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['tela']."</td>";
    echo "<td>".$data['tala']."</td>";
    echo "<td>".$data['usia']."</td>";
    echo "<td>".$data['jenkel']."</td>";
    echo "<td>".$data['tmtcpns']."</td>";
    echo "<td>".$data['mkp']."</td>";
    echo "<td>".$data['golongan']."</td>";
    echo "<td>".$data['tmtgol']."</td>";
    echo "<td>".$data['mkg']."</td>";
    echo "<td>".$data['eselon']."</td>";
    echo "<td>".$data['jabatan']."</td>";
    echo "<td>".$data['bagian']."</td>";
    echo "<td>".$data['status']."</td>";
    echo "<td>".$data['dikstruk']."</td>";
    echo "<td>".$data['tadi']."</td>";
    echo "<td>".$data['propen']."</td>";
    echo "<td>".$data['prodi']."</td>";
    echo "<td>".$data['nase']."</td>";	
    echo "<td>".$data['talu']."</td>";
    echo "<td>".$data['agama']."</td>";		
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>