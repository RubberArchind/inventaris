<!DOCTYPE html>
<html>
<head>
	<title>Update Petugas</title>
</head>
<body>
<?php $id=$_GET['id']; 
$query=mysqli_query($con,"select*from petugas where id_petugas='$id'"); 
$data=mysqli_fetch_array($query); ?>
	<form action="proses.php?a=update-petugas" method="post">
		<input type="hidden" value="<?php echo $id; ?>" name="id"></input>
		<label>Nama :</label>
		<input type="text" value="<?php echo $data['nama_petugas']; ?>" maxlength="40" name="nama"></input>
		<br/>
		<label>Username :</label>
		<input type="text" value="<?php echo $data['username']; ?>" maxlength="20" name="username"></input>
		<br/>
		<label>Password :</label>
		<input type="password" value="<?php echo $data['password']; ?>" maxlength="10" name="password"></input>
		<br/>
		<label>Level :</label>
		<select name="level">
		<option value="<?php echo $data['id_level']; ?>" selected ></option>
			<?php
			$query = mysqli_query($con,"select*from level");
			while($data=mysqli_fetch_array($query)){
			 echo "<option value=".$data['id_level']."> ".$data['nama_level']." </option>";
			}
			?>			
		</select>
		<b>* Jika tidak ada perubahan biarkan kosong</b>
		<br/>
		<button type="submit">Submit</button>
	</form>
</body>
</html>