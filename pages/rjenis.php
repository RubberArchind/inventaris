<!DOCTYPE html>
<html>
<head>
	<title>Jenis</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
 <h1 align="left">KLASIFIKASI JENIS</h1>
	 
	<a href="proses.php?hl=add-jenis" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>

	<table border="1">
		<tr>
			<th>No.</th><th>Kode Jenis</th><th>Nama Jenis</th><th>Keterangan</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from jenis");
			
			while ($data=mysqli_fetch_array($query)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data[kode_jenis]."</td>
				<td>".$data[nama_jenis]."</td>
				<td>".$data[keterangan]."</td>
				<td><a href=proses.php?hl=update-jenis&id=".$data[id_jenis]."><button>Update</button></a> | <a href=proses.php?a=delete-jenis&id=".$data[id_jenis]."><button>Delete</button></a></td>
				</tr>
				";
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>