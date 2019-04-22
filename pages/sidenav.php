<html>
<head>
	<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
<menu>
<div class="sidenav">
<?php if($_SESSION['level']=="1"){ echo"
	<br/><br/><br/><br/>
	<a href=proses.php?hl=admin>INVENTARIS</a>
	<a href=proses.php?hl=rinven>Barang</a>
	<a href=proses.php?hl=rpinjam>Peminjaman</a>
	<a href=proses.php?hl=kembali>Pengembalian</a>
	<a href=proses.php?hl=rpegawai>Pegawai</a>
	<a href=proses.php?hl=rpetugas>Petugas</a>
	<a href=proses.php?hl=rjenis>Jenis</a>
	<a href=proses.php?hl=rruang>Ruang</a>
	<a href=proses.php?hl=export>Export</a>
	<a href=proses.php?a=logout>Log Out</a>
	";}
	else if($_SESSION['level']=="2") { echo"
	<a href=proses.php?hl=admin>INVENTARIS</a>
	<a href=proses.php?hl=rpinjam>Peminjaman</a>
	<a href=proses.php?hl=kembali>Pengembalian</a>
	<a href=proses.php?a=logout>Log Out</a>
";}
	else if($_SESSION['level']=="3") {echo"
	<a href=proses.php?hl=admin>INVENTARIS</a>
	<a href=proses.php?hl=rpinjam>Peminjaman</a>
	<a href=proses.php?a=logout>Log Out</a>
 ";}?>
</div>
</body>
</html>