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
				<h1 align="center" style="font-family: monospace;">LIST PAF DISTRO BARANG </h1>
					<form>
						<tr style="background-color: red">
							<th width="5">ID BARANG</th>
							<th width="100">ID JENIS BARANG</th>
							<th width="100">NAMA BARANG</th>
							<th width="100">STOK</th>
							<th width="100">HARGA BELI</th>
							<th width="100">HARGA JUAL</th>
							<th width="120">
								<a href="<?php echo base_url(). "index.php/controller_barang/add_data";  ?>">ACTION</a>
							</th>
						</tr>
							<?php $i=1; foreach ($data_barang as $d){ ?>
								<tr style="background-color: white">
									<td> <?php echo $i; ?> </td>
									<td> <?php echo $d['id_jenis_barang']; ?> </td>
									<td> <?php echo $d['nama_barang']; ?> </td>
									<td> <?php echo $d['stok']; ?> </td>
									<td> <?php echo $d['harga_beli']; ?> </td>
									<td> <?php echo $d['harga_jual']; ?> </td>
									<td align="center">
										<a href="<?php echo base_url(). "index.php/controller_barang/edit_data/".$d['id_barang']; ?>">EDIT</a> ||
										<a href="<?php echo base_url(). "index.php/controller_barang/do_delete/".$d['id_barang']; ?>">DELETE</a>

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