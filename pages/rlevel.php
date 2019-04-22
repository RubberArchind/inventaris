<!DOCTYPE html>
<html>
<head>
	<title>Level</title>
</head>
<body>
<?php include 'pages/sidenav.php'; ?>
<div class="main">
	<table border="1">
		<tr>
			<th>No.</th><th>Nama Level</th>
		</tr>
			<?php 
			$no=1;
			$query =mysqli_query($con,"select*from level");
			
			while ($data=mysqli_fetch_array($query)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data[nama_level]."</td>				
				</tr>
				";
				$no++;
			}
			 ?>
		
	</table>
</div>
</body>
</html>