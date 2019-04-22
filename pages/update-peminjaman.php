<!DOCTYPE html>
<html>
<head>
	<title>Update Peminjaman</title>
</head>
<body>
<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from peminjaman where id_peminjaman='$id'"); 
$data=mysqli_fetch_array($query); 
$tanggal = $data['tanggal_pinjam'];
?>
	<form action="proses.php?a=update-pinjam" method="post">
		<input type="hidden" value="<?php echo $id; ?>" name="id"></input>
		<label>Nama Peminjam:</label>
		<select name="nama">
		<option value="<?php echo $data['id_pegawai']; ?>" selected readonly></option>
			<?php
			$query = mysqli_query($con,"select*from pegawai");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_pegawai']."> ".$data['nama_pegawai']." </option>";
			}
			?>			
		</select>
		<b>* Jika tidak ada perubahan biarkan kosong</b>
		<br/>
		<label>Barang :</label>
		<select name="barang">
		<option value="<?php echo $data['id_inventaris']; ?>" selected ></option>
			<?php
			$query = mysqli_query($con,"select*from inventaris");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_inventaris']."> ".$data['nama']." </option>";
			}
			?>			
		</select>
		<b>* Jika tidak ada perubahan biarkan kosong</b>
		<br/>
		<label>Tanggal Pinjam :</label>
		<input type="date"  value="<?php echo $tanggal; ?>" name="tglpinjam"> </input>
		<br/>
		<button type="submit">Submit</button>
	</form>
</body>
</html>