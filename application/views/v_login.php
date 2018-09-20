<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>HALAMAN LOGIN</h1>
	<?php
	/*cetak jika ada notifikasi*/
	if($this->session->flashdata('sukses')){
		echo $this->session->flashdata('sukses');
	}
	?>

	<?php echo form_open('controller_login'); ?> 
	<!-- <form method="post" action="<?php echo base_url()."index.php/controller_login"; ?>"> -->
	<p>Username</p>
	<input type="text" name="username" value="<?php echo set_value('username'); ?>">
	<p> <?php echo form_error('username'); ?> </p>

	<p>Password</p>
	<input type="text" name="password" value="<?php echo set_value('password'); ?>">
	<p> <?php echo form_error('password'); ?> </p>

	<p>
	<button type="submit" name="submit">LOGIN</button>
	<button type="reset" name="submit">CANCEL</button>
	</p>
	<!-- </form> -->
	<?php echo form_close();?>
	<p>
		kembali keberanda, silakan klik <?php echo anchor (site_url().'/controller_beranda','disini..'); ?>
	</p>

</body>
</html>