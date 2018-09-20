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
							<li><a href="<?php echo base_url(). "index.php/controller_supplier"; ?>">TRANSAKSI</li>
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
				
				<h1 align="center" style="font-family: monospace;">LIST PAF DISTRO USER </h1>

				<form method="get" action="<?php echo base_url(). "index.php/controller_user/index"; ?>">
					<tr>
						<td colspan="3">
							<input type="text" name="cari"></input>
							<input type="submit" value="Seacrh"></input>
							</td>
						</td>
					</tr>

							<tr style="background-color: red">
							<th width="5">ID</th>
							<th width="100">LEVEL</th>
							<th width="120">
								<a href="<?php echo base_url(). "index.php/controller_user/add_data";  ?>">TAMBAH DATA</a>
							</th>
						</tr>
							<?php $i=1; foreach ($cari as $d){ ?>
								<tr style="background-color: white">
									<td> <?php echo $d->id_user; ?> </td>
									<td> <?php echo $d->level; ?> </td>
									<td align="center">
										<a href="<?php echo base_url(). "index.php/controller_user/edit_data/".$d->id_user; ?>">EDIT</a> ||
										<a href="<?php echo base_url(). "index.php/controller_user/do_delete/".$d->id_user; ?>">DELETE</a>

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