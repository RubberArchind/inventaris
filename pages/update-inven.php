<!DOCTYPE html>
<html>
<head>
	<title>Update Barang</title>
</head>
<body>
<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from inventaris where id_inventaris='$id'"); 
$data=mysqli_fetch_array($query); ?>
	<form action="proses.php?a=update-inven" method="post">
		<input type="hidden" value="<?php echo $data['id_inventaris']; ?>" name="id"></input>
		<label>Nama :</label>
		<input type="text" value="<?php echo $data['nama']; ?>" maxlength="40" name="nama"></input>
		<br/>
		<label>Kondisi :</label>
		<input type="text" value="<?php echo $data['kondisi']; ?>"  name="kondisi"></input>
		<br/>
		<label>Keterangan :</label>
		<input type="text" value="<?php echo $data['keterangan']; ?>"  name="ket"></input>
		<br/>
		<label>Jumlah :</label>
		<input type="text" value="<?php echo $data['jumlah']; ?>"  name="jumlah"></input>
		<br/>
		<label>Jenis :</label>
		<select name="jenis">
		<option value="<?php echo $data['id_jenis']; ?>" selected ></option>
			<?php
			$query = mysqli_query($con,"select*from jenis");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_jenis']."> ".$data['nama_jenis']." </option>";
			}
			?>			
		</select>
		<b>*</b>
		<br/>
		<label>Ruangan :</label>
		<select name="ruang">
		<option value="<?php echo $data['id_ruang']; ?>" selected ></option>
			<?php
			$query = mysqli_query($con,"select*from ruang");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_ruang']."> ".$data['nama_ruang']." </option>";
			}
			?>			
		</select>
		<b>*</b>
		<br/>
		<p>*Biarkan kosong jika tidak ada perubahan</p>
		<button type="submit">Submit</button>
	</form>
</body>
</html>