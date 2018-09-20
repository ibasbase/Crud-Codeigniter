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
				<table border="1" align="center" style="border-collapse: collapse; font-family: monospace;">
				<h1 align="center" style="font-family: monospace;">LIST PAF DISTRO SUPPLIER </h1>
					<form>
						<tr style="background-color: red">
							<th width="5">ID SUPPLIER</th>
							<th width="100">NAMA SUPPLIER</th>
							<th width="100">NAMA BARANG</th>
							<th width="100">NO TELP</th>
							<th width="100">ALAMAT</th>
							<th width="120">
								<a href="<?php echo base_url(). "index.php/controller_supplier/add_data";  ?>">ACTION</a>
							</th>
						</tr>
							<?php $i=1; foreach ($data_supplier as $d){ ?>
								<tr style="background-color: white">
									<td> <?php echo $i; ?> </td>
									<td> <?php echo $d['nama_supplier']; ?> </td>
									<td> <?php echo $d['nama_barang']; ?> </td>
									<td> <?php echo $d['no_telp']; ?> </td>
									<td> <?php echo $d['alamat']; ?> </td>
									<td align="center">
										<a href="<?php echo base_url(). "index.php/controller_supplier/edit_data/".$d['id_supplier']; ?>">EDIT</a> ||
										<a href="<?php echo base_url(). "index.php/controller_supplier/delete/".$d['id_supplier']; ?>">DELETE</a>

									</td>
								</tr>
							<?php $i++; } ?>
					</form>
				</table>
				<a href="<?php echo base_url(). "index.php/controller_barang/download_barang"; ?>"><h1>Donwload File</h1></a>
				<a href="<?php echo base_url(). "index.php/controller_barang/download_barang"; ?>"><h1>Donwload Film</h1></a>
			</div>
			<div id="footer"></div>
		</div>		
	</body>
</html>