<!DOCTYPE html>
<html>
<head>
	<title>Export</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
<form action="proses.php?a=export" method="post">
		<label>Export Laporan </label>
		<select name="nama">
			<option value="inventaris">Inventaris</option>

			<option value="peminjaman">Peminjaman</option>			
		</select>
		<br/><br/>
		<label>Sort By </label>
		<select name="sortir">
			<option value="date">Date</option>
			<option value="abc">Alphabet</option>
		</select>
		<br/><br/>
		<button type="submit">Generate Laporan</button>
</form>
</div>
</body>
</html>