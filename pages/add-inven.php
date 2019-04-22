<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
	<form action="proses.php?a=add-inven" method="post">
		<label>Nama</label>
		<input type="text" placeholder="Masukkan nama barang" maxlength="40" name="nama"></input>
		<br/><br/>
		<label>Kondisi </label>
		<input type="text" placeholder="Masukkan kondisi"  name="kondisi"></input>
		<br/><br/>
		<label>Keterangan </label>
		<input type="text" placeholder="Masukkan keterangan"  name="ket"></input>
		<br/><br/>
		<label>Jumlah </label>
		<input type="text" placeholder="Masukkan keterangan"  name="jumlah"></input>
		<br/><br/>
		<label>Jenis </label>
		<select name="jenis">
			<?php
			$query = mysqli_query($con,"select*from jenis");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_jenis']."> ".$data['nama_jenis']." </option>";
			}
			?>			
		</select>
		<br/><br/>
		<label>Ruangan </label>
		<select name="ruang">
			<?php
			$query = mysqli_query($con,"select*from ruang");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_ruang']."> ".$data['nama_ruang']." </option>";
			}
			?>			
		</select>
		<br/><br/>
		<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>