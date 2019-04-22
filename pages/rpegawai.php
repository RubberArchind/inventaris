<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>

<div class="main">
 <h1 align="left">DATA PEGAWAI</h1>
	 
	<a href="proses.php?hl=add-pegawai" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>

	<table border="1">
		<tr>
			<th>No.</th><th>Nama Pegawai</th><th>NIP</th><th>Alamat</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from pegawai");
			
			while ($data=mysqli_fetch_array($query)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data[nama_pegawai]."</td>
				<td>".$data[nip]."</td>
				<td>".$data[alamat]."</td>
				<td><a href=proses.php?hl=update-pegawai&id=".$data[id_pegawai]."><button>Update</button></a> | <a href=proses.php?a=delete-pegawai&id=".$data[id_pegawai]."><button>Delete</button></a></td>
				</tr>
				";
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>