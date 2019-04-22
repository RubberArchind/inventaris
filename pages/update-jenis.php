<!DOCTYPE html>
<html>
<head>
	<title>Update Jenis</title>
</head>
<body>
<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from jenis where id_jenis='$id'"); 
$data=mysqli_fetch_array($query); ?>
<form action="proses.php?a=update-jenis" method="post">
		<input type="hidden" value="<?php echo $id; ?>" name="id"></input>
		<label>Nama Jenis :</label>
		<input type="text" value="<?php echo $data['nama_jenis'] ?>" maxlength="30" name="nama"></input>
		<br/>
		<label>Kode Jenis :</label>
		<input type="text" value="<?php echo $data['kode_jenis']; ?>" maxlength="4" name="kode"></input>
		<br/>
		<label>Keterangan :</label>
		<input type="text" value="<?php echo $data['keterangan'] ?>" name="ket"></input>
		<br/>
		<button type="submit">Update</button>
	</form>
</body>
</html>