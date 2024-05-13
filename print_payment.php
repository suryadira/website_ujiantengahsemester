<?php 
session_start();
include "koneksi.php" ;
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
	<td><div align="center">
	<h3><label>Mircale Hotel </label></h3>
	<label>Jimbaran, Kec. Kuta Selatan.,</label>
	<label>Kabupaten Badung, Bali</label> 
	<label>Telp : (0361) 702222</label> 
	<label>Email : info@miracle-hotel.com</label>
	<div align="center">Print Payment
</div>
	</td>
	</tr>
</table>
</div>
<table width="100%" border="1" class="table table-bordered table-striped">

		<tr> 
			<th>No</th>
			<th>Id Konfirmasi</th>
			<th>Id Pelanggan</th>
			<th>Method</th>
			<th>Total Payment</th>
		</tr>

<?php 
include 'koneksi.php';
$sql= mysqli_query($conn,"select * from konfirmasi where id_konfirmasi='$_GET[id_konfirmasi]' and status='Paid'");
$no=1;
while($data=mysqli_fetch_array($sql)){

?>

		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td align="center"><?php echo $data['id_konfirmasi'] ?> </td>
			<td align="center"><?php echo $data['id_pelanggan'] ?> </td>
			<td align="center"><?php echo $data['method'] ?> </td>
			<td align="center"><?php echo $data['total_payment'] ?> </td>
		</tr>

<?php 
$no++;
}
?>
</table> 
 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 Manager
 <br></br>
 <br></br>
 (...........)
 </br>
 </td>
 </tr>
 </div>
