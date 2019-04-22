<!DOCTYPE html>
<html>
<head>
	<title>Update Ruang</title>
</head>
<body>
<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from ruang where id_ruang='$id'"); 
$data=mysqli_fetch_array($query); ?>
	<form action="proses.php?a=update-ruang" method="post">
		<input type="hidden" value="<?php echo $data['id_ruang']; ?>" name="id"></input>
		<label>Nama Ruang :</label>
		<input type="text" value="<?php echo $data['nama_ruang'] ?>" maxlength="30" name="nama"></input>
		<br/>
		<label>Kode Ruang :</label>
		<input type="text" value="<?php echo $data['kode_ruang']; ?>" maxlength="4" name="kode"></input>
		<br/>
		<label>Keterangan :</label>
		<input type="text" value="<?php echo $data['keterangan']; ?>" name="ket"></input>		
		<br/>
		<button type="submit">Submit</button>
	</form>
</body>
</html>