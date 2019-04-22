<?php 
$con = mysqli_connect('localhost','root','','inventaris'); 

	if(isset($_GET['a'])){
		switch ($_GET['a']) {
			case 'login':
				session_start(oid);
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$query = mysqli_query($con,"select * from petugas where username='$user' and password='$pass'");
				$result = mysqli_fetch_array($query);
				$num = mysqli_num_rows($query);				
				$_SESSION['id']=$result['id_petugas'];
				$_SESSION['nama']=$result['nama_petugas'];
				$_SESSION['level'] = $result['id_level'];
				if($num==1){
					if($result['id_level']=="1"){						
						header("location:proses.php?hl=admin");
					}else if($result['id_level']=="2"){						
						header("location:proses.php?hl=operator");
					}else if($result['id_level']=="3"){						
						header("location:proses.php?hl=peminjam");
					}
				}else{
					header("location:gagallogin.php");
				}
				break;

			case 'logout':
				session_start();
				session_destroy();
				header("location:proses.php?hl=login");
				break;

			case 'add-jenis':
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$ket = $_POST['ket'];
				$query = mysqli_query($con,"select*from jenis");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="jns0".($num+1);
				}else if($num>100){
					$id="jns".($num+1);
				}else{
					$id="jns00".($num+1);
				}
				mysqli_query($con,"insert into jenis values ('$id','$nama','$kode','$ket')");
				// echo $id.$nama.$kode.$ket;
				header("location:proses.php?hl=rjenis");
				break;

			case 'update-jenis':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$ket = $_POST['ket'];
				mysqli_query($con,"update jenis set nama_jenis='$nama',kode_jenis='$kode',keterangan='$ket' where id_jenis='$id'");
				header("location:proses.php?hl=rjenis");
				break;
			
			case 'delete-jenis':
				$id = $_GET['id'];
				mysqli_query($con,"delete from jenis where id_jenis='$id'");
				header("location:proses.php?hl=rjenis");
				break;

			case 'add-ruang':
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$ket = $_POST['ket'];
				$query = mysqli_query($con,"select*from ruang");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="rng0".($num+1);
				}else if($num>100){
					$id="rng".($num+1);
				}else{
					$id="rng00".($num+1);
				}
				mysqli_query($con,"insert into ruang values ('$id','$nama','$kode','$ket')");
				header("location:proses.php?hl=rruang");
				break;

			case 'update-ruang':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$kode = $_POST['kode'];
				$ket = $_POST['ket'];
				mysqli_query($con,"update ruang set nama_ruang='$nama',kode_ruang='$kode',keterangan='$ket' where id_ruang='$id'");
				header("location:proses.php?hl=rruang");
				break;
			
			case 'delete-ruang':
				$id = $_GET['id'];
				mysqli_query($con,"delete from ruang where id_ruang='$id'");
				header("location:proses.php?hl=rruang");
				break;

			case 'add-petugas':
				$nama = $_POST['nama'];
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$level = $_POST['level'];
				$query = mysqli_query($con,"select*from petugas");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="ptg0".($num+1);
				}else if($num>100){
					$id="ptg".($num+1);
				}else{
					$id="ptg00".($num+1);
				}
				mysqli_query($con,"insert into petugas values ('$id','$user','$pass','$nama','$level')");
				header("location:proses.php?hl=rpetugas");
				break;

			case 'update-petugas':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$level = $_POST['level'];
				mysqli_query($con,"update petugas set nama_petugas='$nama',username='$user',password='$pass',id_level='$level' where id_petugas='$id'");
				header("location:proses.php?hl=rpetugas");
				break;
			
			case 'delete-petugas':
				$id = $_GET['id'];
				mysqli_query($con,"delete from petugas where id_petugas='$id'");
				header("location:proses.php?hl=rpetugas");
				break;
		
			case 'add-pegawai':
				$nama = $_POST['nama'];
				$nip = $_POST['nip'];
				$alamat = $_POST['alamat'];
				$query = mysqli_query($con,"select*from pegawai");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="pgw0".($num+1);
				}else if($num>100){
					$id="pgw".($num+1);
				}else{
					$id="pgw00".($num+1);
				}
				mysqli_query($con,"insert into pegawai values ('$id','$nama','$nip','$alamat')");
				header("location:proses.php?hl=rpegawai");
				break;

			case 'update-pegawai':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$nip = $_POST['nip'];
				$alamat = $_POST['alamat'];
				mysqli_query($con,"update pegawai set nama_pegawai='$nama',nip='$nip',alamat='$alamat' where id_pegawai='$id'");
				header("location:proses.php?hl=rpegawai");
				break;

			case 'delete-pegawai':
				$id = $_GET['id'];
				mysqli_query($con,"delete from pegawai where id_pegawai='$id'");
				header("location:proses.php?hl=rpegawai");
				break;

			case 'add-pinjam':
				$nama = $_POST['nama'];
				$barang = $_POST['barang'];
				$tgl = $_POST['tglpinjam'];
				$jmlh = $_POST['jumlah'];
				$query = mysqli_query($con,"select*from peminjaman");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="pmj0".($num+1);
				}else if($num>100){
					$id="pmj".($num+1);
				}else{
					$id="pmj00".($num+1);
				}

				$queri = mysqli_query($con,"select*from detail_pinjam");
				$nums = mysqli_num_rows($queri);
				if($nums>10){
					$ids="dtp0".($nums+1);
				}else if($nums>100){
					$ids="dtp".($nums+1);
				}else{
					$ids="dtp00".($nums+1);
				}

				$querys = mysqli_query($con,"select jumlah from inventaris");
				$res = mysqli_fetch_array($querys);
				$sisa = ($res['jumlah']-$jmlh);				
				$query1 = "insert into peminjaman values ('$id','$tgl','','0','$nama','$barang','$jmlh')";
				$query2 .= "update inventaris set jumlah='$sisa' where id_inventaris='$barang'";
				$query3 .= "insert into detail_pinjam values ('$ids','$barang','$id','$jmlh')";
				mysqli_query($con,$query1);
				mysqli_query($con,$query2);
				mysqli_query($con,$query3);
				header("location:proses.php?hl=rpinjam");
				break;

			case 'update-pinjam':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$barang = $_POST['barang'];
				$tgl = $_POST['tglpinjam'];
				mysqli_query($con,"update peminjaman set id_pegawai='$nama',id_inventaris='$barang',tanggal_pinjam='$tgl' where id_peminjaman='$id'");
				header("location:proses.php?hl=rpinjam");
				break;

			case 'delete-pinjam':
				$id = $_GET['id'];
				mysqli_query($con,"delete from peminjaman where id_peminjaman='$id'");
				header("location:proses.php?hl=rpinjam");
				break;

			case 'add-inven':
			session_start(oid);
				$nama = $_POST['nama'];
				$kondisi = $_POST['kondisi'];
				$ket = $_POST['ket'];
				$jumlah = $_POST['jumlah'];
				$jenis = $_POST['jenis'];
				$ruang = $_POST['ruang'];
				$query = mysqli_query($con,"select*from inventaris");
				$num = mysqli_num_rows($query);
				if($num>10){
					$id="inv0".($num+1);
				}else if($num>100){
					$id="inv".($num+1);
				}else{
					$id="inv00".($num+1);
				}
				$kode = "inv".substr(str_shuffle("abcdefghijklmopqrstuvwxyz1234567890"),0,2);
				$ptg = $_SESSION['id'];
				mysqli_query($con,"insert into inventaris (id_inventaris,nama,kondisi,keterangan,jumlah,id_jenis,id_ruang,kode_inventaris,id_petugas) values ('$id','$nama','$kondisi','$ket','$jumlah','$jenis','$ruang','$kode','$ptg')");
				header("location:proses.php?hl=rinven");
				break;

			case 'update-inven':
				$id= $_POST['id'];
				$nama = $_POST['nama'];
				$kondisi = $_POST['kondisi'];
				$ket = $_POST['ket'];
				$jumlah = $_POST['jumlah'];
				$jenis = $_POST['jenis'];
				$ruang = $_POST['ruang'];
				mysqli_query($con,"update inventaris set nama='$nama',kondisi='$kondisi',keterangan='$ket',jumlah='$jumlah',id_jenis='$jenis',id_ruang='$ruang' where id_inventaris='$id'");
				header("location:proses.php?hl=rinven");
				break;

			case 'delete-inven':
				$id = $_GET['id'];
				mysqli_query($con,"delete from inventaris where id_inventaris='$id'");
				header("location:proses.php?hl=rinven");
				break;

			case 'kembali':
				$id = $_GET['id'];
				mysqli_query($con,"update peminjaman set status_peminjaman=1, tanggal_kembali=NOW() where id_peminjaman = '$id'");
				header("location:proses.php?hl=kembali");
				break;

			case 'export':
				$nama = $_POST['nama'];
				$sortir = $_POST['sortir'];
				if($nama=="inventaris"){
					if($sortir=="date"){
					header("location:proses.php?hl=export-inven&sorrt=dat");
					}else{
						header("location:proses.php?hl=export-inven&sorrt=abc");
					}
				}else if($nama=="detail_pinjam"){
					if($sortir=="date"){
					header("location:proses.php?hl=export-inven&sorrt=dat");
					}else{
						header("location:proses.php?hl=export-inven&sorrt=abc");
					}
				}else if($nama=="peminjaman"){
					if($sortir=="date"){
					header("location:proses.php?hl=export-inven&sorrt=dat");
					}else{
						header("location:proses.php&hl=export-inven?sorrt=abc");
					}
				}
		}
	}


	if(isset($_GET['hl'])){
		switch ($_GET['hl']) {
			case 'login':
				include 'index.php';
				break;
			case 'admin':
				session_start(oid);
				include 'pages/admin.php';
				break;
			case 'operator':
				session_start(oid);
				include 'pages/operator.php';
				break;
			case 'peminjam':
				session_start(oid);
				include 'pages/peminjam.php';
				break;
			case 'rjenis':
			session_start(oid);
				include 'pages/rjenis.php';
				break;

			case 'add-jenis':
				session_start(oid);
				include 'pages/add-jenis.html';
				break;
			
			case 'update-jenis':

				session_start(oid);
				include 'pages/update-jenis.php';
				break;

			case 'rruang':
			session_start(oid);
				include 'pages/rruang.php';
				break;

			case 'add-ruang':

			session_start(oid);
				include 'pages/add-ruang.html';
				break;

			case 'update-ruang':

			session_start(oid);
				include 'pages/update-ruang.php';
				break;

			case 'rlevel':
			session_start(oid);
				include 'pages/rlevel.php';
				break;

			case 'rpetugas':
			session_start(oid);
				include 'pages/rpetugas.php';
				break;

			case 'add-petugas':
			session_start(oid);
				include 'pages/add-petugas.php';
				break;

			case 'update-petugas':
			session_start(oid);
				include 'pages/update-petugas.php';
				break;

			case 'rinven':
				session_start(oid);
				include 'pages/rinven.php';
				break;

			case 'add-inven':

				session_start(oid);
				include 'pages/add-inven.php';
				break;

			case 'update-inven':

			session_start(oid);
				include 'pages/update-inven.php';
				break;

			case 'rpegawai':

			session_start(oid);
				include 'pages/rpegawai.php';
				break;

			case 'add-pegawai':

			session_start(oid);
				include 'pages/add-pegawai.html';
				break;

			case 'update-pegawai':

			session_start(oid);
				include 'pages/update-pegawai.php';
				break;

			case 'rpinjam':	
				session_start(oid);
				include 'pages/rpinjam.php';
				break;

			case 'add-pinjam':
			session_start(oid);
				include 'pages/add-peminjaman.php';
				break;

			case 'update-pinjam':
			session_start(oid);
				include 'pages/update-peminjaman.php';
				break;

			case 'kembali':
			session_start(oid);
				include 'pages/kembali.php';
				break;

			case 'export':
				session_start(oid);
				include 'pages/export.php';
				break;

			case 'export-inven':
				include 'pages/export-inven.php';
				break;
		}
	}
 ?>