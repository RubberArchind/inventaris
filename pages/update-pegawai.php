<!DOCTYPE html>
<html>
<head>
	<title>Update Pegawai</title>
	<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
<div class="sidenav">
	<a class="title" href="#">INVENTARIS</a>
	<a href="#">Barang</a>
	<a href="#">Peminjaman</a>
	<a href="#">Pengembalian</a>
	<a href="proses.php?hl=rpegawai">Pegawai</a>
	<a href="proses.php?a=logout" style="color:red">LOGOUT</a>
</div>
<div class="main">

<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from pegawai where id_pegawai='$id'"); 
$data=mysqli_fetch_array($query); ?>
<form action="proses.php?a=update-pegawai" method="post">
		<input type="hidden" value="<?php echo $id; ?>" name="id"></input>
		<label>Nama Pegawai :</label>
		<input type="text" value="<?php echo $data['nama_pegawai']; ?>" maxlength="30" name="nama"></input>
		<br/>
		<label>NIP :</label>
		<input type="text" value="<?php echo $data['nip']; ?>" maxlength="13" name="nip"></input>
		<br/>
		<label>Alamat :</label>
		<input type="text" value="<?php echo $data['alamat']; ?>" name="alamat"></input>		
		<br/>
		<button type="submit">Submit</button>

</form>
</div>
</body>
</html>