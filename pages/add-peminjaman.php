<!DOCTYPE html>
<html>
<head>
	<title>Tambah Peminjaman</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
	<form action="proses.php?a=add-pinjam" method="post">
		<label>Nama Peminjam </label>
		<select name="nama">
			<?php
			$query = mysqli_query($con,"select*from pegawai");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_pegawai']."> ".$data['nama_pegawai']." </option>";
			}
			?>			
		</select>
		<br/><br/>
		<label>Barang </label>
		<select name="barang">
			<?php
			$query = mysqli_query($con,"select*from inventaris");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_inventaris']."> ".$data['nama']." </option>";
			}
			?>			
		</select>
		<br/><br/>
		<label>Jumlah </label>
		<input type="number" placeholder="Masukkan jumlah barang" maxlength="3" name="jumlah" ></input>
		<br/><br/>
		<label>Tanggal Pinjam </label>
		<input type="date" name="tglpinjam"></input>
		
		<br/><br/>
		<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>