<!DOCTYPE html>
<html>
<head>
	<title>Petugas</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
 <h1 align="left">DATA PETUGAS</h1>
	 
	<a href="proses.php?hl=add-petugas" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>

	<table border="1">
		<tr>
			<th>No.</th><th>Nama Petugas</th><th>Username</th><th>Password</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from petugas");
			
			while ($data=mysqli_fetch_array($query)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data[nama_petugas]."</td>
				<td>".$data[username]."</td>
				<td>".$data[password]."</td>
				<td><a href=proses.php?hl=update-petugas&id=".$data[id_petugas]."><button>Update</button></a> | <a href=proses.php?a=delete-petugas&id=".$data[id_petugas]."><button>Delete</button></a></td>
				</tr>
				";
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>