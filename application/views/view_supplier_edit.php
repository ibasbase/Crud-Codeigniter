<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/main_user.css"; ?>">

		<title>PAF DISTRO</title>

		<style type="text/css">
			body{
				margin-left: 0px;
				margin-right: 0px;
				margin-top: 0px;
				margin-bottom: 0px;
			}
		</style>
	</head>

	<body>
		<div id="container">
			<div id="header">
				<!-- <img src="<?php echo base_url(). "Menuu.jpg"; ?>"> -->
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">MASTER</a>
						<ul>
							<li><a href="<?php echo base_url(). "index.php/controller_barang"; ?>">BARANG</a></li><br/>
							<li><a href="<?php echo base_url(). "index.php/controller_jenis_barang"; ?>">JENIS BARANG</a></li><br/>
							<li><a href="<?php echo base_url(). "index.php/controller_user"; ?>">USER</a></li><br/>
							<li><a href="#">TRANSAKSI</li>
						</ul>
						</li>
					<li><a href="#">TRANSAKSI</a></li>
					<li><a href="#">ABOUT</a></li>
				</ul>
			</div>
			<div id="sidebar">
				<!-- <img src="<?php echo base_url(). "ElClassico.jpg"; ?>"> -->
			</div>
			<div id="content">
				<table border="0" align="center" style="border-collapse: collapse; font-family: monospace;">
				<h1 align="center" style="font-family: monospace;">LIST PAF DISTRO SUPPLIER </h1>
					<form method="POST" action="<?php echo base_url(). "index.php/controller_supplier/do_edit"; ?>">
						<tr>
							<td>ID SUPPLIER</td>
							<td>
								<input type="text" name="id_supplier" size="30" value="<?php echo $id_supplier; ?>" readonly="readonly">
							</td>
						</tr>

						<tr>
							<td>NAMA SUPPLIER</td>
							<td>
								<input type="text" name="nama_supplier" size="30" value="<?php echo $nama_supplier; ?>">
							</td>
						</tr>
						
						<tr>
							<td>NAMA BARANG</td>
							<td>
								<input type="text" name="nama_barang" size="30" value="<?php echo $nama_barang; ?>">
							</td>
						</tr>

						<tr>
							<td>NO TELP</td>
							<td>
								<input type="text" name="no_telp" size="30" value="<?php echo $no_telp; ?>">
							</td>
						</tr>

						<tr>
							<td>ALAMAT</td>
							<td>
								<textarea cols="30" rows="3" name="alamat"><?php echo $alamat; ?></textarea>
							</td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="update" value="UPDATE">
								<input type="reset" name="cancel" value="CANCEL">
							</td>
						</tr>	

					</form>
				</table>
				<a href="<?php echo base_url(). "index.php/controller_barang/download_barang"; ?>"><h1>Donwload File</h1></a>
				<a href="<?php echo base_url(). "index.php/controller_barang/download_barang"; ?>"><h1>Donwload Film</h1></a>
			</div>
			<div id="footer"></div>
		</div>		
	</body>
</html>