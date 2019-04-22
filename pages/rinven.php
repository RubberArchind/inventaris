<!DOCTYPE html>
<html>
<head>
	<title>Inventaris</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
	
	
	 <h1 align="left"> BARANG</h1>
	 
	<a href="proses.php?hl=add-inven" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>No.</th><th>Kode Barang</th><th>Nama Barang</th><th>Kondisi</th><th>Keterangan</th><th>Jumlah</th><th>Ruangan</th><th>Tanggal Registrasi</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from inventaris");
			
			while ($data=mysqli_fetch_array($query)) {
				$querys = mysqli_query($con,"select * from ruang where id_ruang='$data[id_ruang]'");
				$res = mysqli_fetch_array($querys);
				$tgl = substr($data['tanggal_registrasi'],0,10);

				echo "
				<tr>
				<td>$no</td>
				<td>".$data[kode_inventaris]."</td>
				<td>".$data[nama]."</td>
				<td>".$data[kondisi]."</td>
				<td>".$data[keterangan]."</td>
				<td>".$data[jumlah]."</td>
				<td>".$res[nama_ruang]."</td>
				<td>$tgl</td>			
				";
				
				

				echo "
				<td><a href=proses.php?hl=update-inven&id=".$data[id_inventaris]."><button>Update</button></a> | <a href=proses.php?a=delete-inven&id=".$data[id_inventaris]."><button>Delete</button></a></td>
				</tr>";
				
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>