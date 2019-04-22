<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
 <h1 align="left">PEMINJAMAN</h1>
	 
	<a href="proses.php?hl=add-pinjam" style="float:left;"><button>Tambah+</button></a>
	<br/><br/>
	
	<table border="1">
		<tr>
			<th>No.</th><th>Nama Peminjam</th><th>Tanggal Pinjam</th><th>Status</th><th>Jumlah</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select id_pegawai,tanggal_pinjam,status_peminjaman,jumlah from peminjaman where status_peminjaman=0");
			
			while ($data=mysqli_fetch_array($query)) {
				$querys = mysqli_query($con,"select * from pegawai where id_pegawai='$data[id_pegawai]'");
				$res = mysqli_fetch_array($querys);
				$status = $data['status_peminjaman'];
				echo "
				<tr>
				<td>$no</td>
				<td>".$res[nama_pegawai]."</td>
				<td>".$data[tanggal_pinjam]."</td>
				";
				
				if($status>0){
				echo "<td>Sudah Kembali</td>";
				}else{
				echo "<td>Belum Kembali</td>";
				}

				if($_SESSION['level']!="lvl003"){
				echo "
				<td>".$data[jumlah]."</td>
				<td><a href=proses.php?hl=update-pinjam&id=".$data[id_peminjaman]."><button>Update</button></a> | <a href=proses.php?a=delete-pinjam&id=".$data[id_peminjaman]."><button>Delete</button></a></td>
				</tr>";
				}else{
					echo "
					<td>".$data[jumlah]."</td>
					<td><a href=proses.php?a=delete-pinjam&id=".$data[id_peminjaman]."><button>Batal</button></a></td>
					";
				}
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>