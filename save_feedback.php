<?php
include "koneksi.php";
include "fungsi_gambar.php";
 
 
	 if(isset($_POST['submit'])){
		$lokasi_file=$_FILES['gambar']['tmp_name'];
		$nama_file=$_FILES['gambar']['name'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$no_hp=$_POST['no_hp'];
		$pesan=$_POST['pesan'];
		
	 if(!empty($lokasi_file))
	 {
	 UploadFile($nama_file);
	$sqlsimpan = mysqli_query($conn, "insert into feedback (gambar,nama, email, no_hp, pesan) values ('$nama_file','$nama', '$email', '$no_hp','$pesan')");
	} else { 
	$sqlsimpan = mysqli_query($conn, "insert into feedback (gambar,nama, email, no_hp, pesan) values ('$nama_file','$nama', '$email', '$no_hp','$pesan')");
      }
	
	if($sqlsimpan){
	   echo "<script>alert('Feedback Berhasil Dikirim');
					 window.location='index.php?page=feedback';</script>";
	 }else{
	 
	   echo "<script>alert('Feedback Gagal Disimpan');
					window.location='index.php?page=feedback';</script>";
	  }
	}

?>