<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/main_user.css"; ?> ">

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
			<div id="header"></div>
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
			<div id="sidebar"></div>
			<div id="content">
				<table border="0" align="center" style="border-collapse: collapse; font-family: monospace;">
					<h1 align="center" style="font-family: monospace;">FORM EDIT USER</h1>
					<form method="POST" action="<?php echo base_url(). "index.php/controller_user/do_edit"; ?>">
						<tr>
							<td width="100">ID</td>
							<td>
								<input type="text" name="id_user" size="30" readonly="readonly" value="<?php echo $id_user; ?>">
							</td>
						</tr>

						<tr>
							<td width="100">LEVEL</td>
							<td>
								<?php if($level == "Super Admin"){ ?>
								<select name="level">
									<option>-- Select Option --</option>
									<option value="Super Admin" selected="selected">Super Admin</option>
									<option value="Admin">Admin</option>
									<option value="Member">Member</option>
								</select>
								<?php } elseif($level == "Admin"){ ?>
								<select name="level">
									<option>-- Select Option --</option>
									<option value="Super Admin">Super Admin</option>
									<option value="Admin" selected="selected">Admin</option>
									<option value="Member">Member</option>
								</select>
								<?php } else { ?>
								<select name="level">
									<option>-- Select Option --</option>
									<option value="Super Admin">Super Admin</option>
									<option value="Admin">Admin</option>
									<option value="Member" selected="selected">Member</option>
								</select>
								<?php } ?>
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
			</div>
			<div id="footer"></div>
		</div>		
	</body>
</html>