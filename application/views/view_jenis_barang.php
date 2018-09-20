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
							<li><a href="#">BARANG</a></li><br/>
							<li><a href="#">JENIS BARANG</a></li><br/>
							<li><a href="#">USER</a></li><br/>
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
				<h1 align="center" style="font-family: monospace;">LIST PAF DISTRO JENIS BARANG </h1>
					<form>
						<tr style="background-color: red">
							<th width="5">ID</th>
							<th width="100">NAMA JENIS</th>
							<th width="125">
								<a href="<?php echo base_url(). "index.php/controller_jenis_barang/add_data"; ?>">ACTION</a>
								</th>
						</tr>
							<?php $i=1; foreach ($data_jenis_barang as $d){ ?>
								<tr style="background-color: white">
									<td> <?php echo $i; ?> </td>
									<td> <?php echo $d['nama_jenis']; ?> </td>
									<td align="center">
										<a href="<?php echo base_url(). "index.php/controller_jenis_barang/edit_data/".$d['id_jenis_barang']; ?>">EDIT</a> ||
										<a href="<?php echo base_url(). "index.php/controller_jenis_barang/do_delete/".$d['id_jenis_barang']; ?>">DELETE</a>

									</td>
								</tr>
							<?php $i++; } ?>
					</form>
				</table>
			</div>
			<div id="footer"></div>
		</div>		
	</body>
</html>