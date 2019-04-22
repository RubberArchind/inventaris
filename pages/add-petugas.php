<!DOCTYPE html>
<html>
<head>
	<title>Tambah Petugas</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
	<form action="proses.php?a=add-petugas" method="post">
		<label>Nama </label>
		<input type="text" placeholder="Masukkan nama anda" maxlength="40" name="nama"></input>
		<br/><br/>
		<label>Username </label>
		<input type="text" placeholder="Masukkan username" maxlength="20" name="username"></input>
		<br/><br/>
		<label>Password </label>
		<input type="password" placeholder="Masukkan password" maxlength="10" name="password"></input>
		<br/><br/>
		<label>Level </label>
		<select name="level">
			<?php
			$query = mysqli_query($con,"select*from level");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_level']."> ".$data['nama_level']." </option>";
			}
			?>			
		</select>
		<br/><br/>
		<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>