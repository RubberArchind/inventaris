<!DOCTYPE html>
<html>
<head>
	<title>Ruangan</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
 <h1 align="left">RUANGAN</h1>
	 
	<a href="proses.php?hl=add-ruang" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>

	<table border="1" >
		<tr>
			<th>No.</th><th>Kode Ruang</th><th>Nama Ruang</th><th>Keterangan</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from ruang");
			
			while ($data=mysqli_fetch_array($query)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data[kode_ruang]."</td>
				<td>".$data[nama_ruang]."</td>
				<td>".$data[keterangan]."</td>
				<td><a href=proses.php?hl=update-ruang&id=".$data[id_ruang]."><button>Update</button></a> | <a href=proses.php?a=delete-ruang&id=".$data[id_ruang]."><button>Delete</button></a></td>
				</tr>
				</tr>
				";
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>