<!DOCTYPE html>
<html>
<head>
	<title>Pengembalian</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
 <h1 align="left">PENGEMBALIAN</h1>
	 
	
	<br/>
	<table border="1">
		<tr>
			<th>No.</th><th>Nama Peminjam</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Status</th><th>Jumlah</th><th>Operasi</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from peminjaman ");
			
			while ($data=mysqli_fetch_array($query)) {
				$querys = mysqli_query($con,"select * from pegawai where id_pegawai='$data[id_pegawai]'");
				$res = mysqli_fetch_array($querys);
				$status = $data['status_peminjaman'];
				echo "
				<tr>
				<td>$no</td>
				<td>".$res[nama_pegawai]."</td>
				<td>".$data[tanggal_pinjam]."</td>
				<td>".$data[tanggal_kembali]."</td>";
				
				if($status>0){
				echo "<td>Sudah Kembali</td>";
				}else{
				echo "<td>Belum Kembali</td>";
				}

				echo "
				<td>".$data[jumlah]."</td>
				<td><a href=proses.php?a=kembali&id=".$data[id_peminjaman]."><button>Kembalikan</button></a></td>
				</tr>";
				
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>