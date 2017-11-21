<html>
<head>
	<title>Penjualan ATK Laskar Ilmu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="<?= base_url();?>layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- Top Background Image Wrapper -->
	<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/1.png');"> 
		<!-- ################################################################################################ -->
		<?php $this->load->view('templates/header_owner');?>
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<div id="breadcrumb" class="hoc clear"> 
			<!-- ################################################################################################ -->
			<ul>
				<li><a href="home_admin">Home</a></li>
				<li><a href="admin">Admin</a></li>
				<li><a href="admin_edit">Edit</a></li>
			</ul>
			<!-- ################################################################################################ -->
		</div>
		<!-- ################################################################################################ -->
	</div>
	<!-- End Top Background Image Wrapper -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<main class="hoc container clear"> 
			<!-- main body -->
			<!-- ################################################################################################ -->
			<div class="content"> 
				<!-- ################################################################################################ -->
				<div id="comments">
					<h2>Edit data</h2>
					<form action="<?= site_url('admin/edit_aksi');?>" method="post">
						<div class="one_quarter">
							<label for="email">Nama<span>*</span></label>
							<input type="text" name="nama" value="<?php echo $nama; ?>" size="22" required>
						</div>
						<div class="two_quarter">
							<label for="email">Password</label>
							<input type="text" name="password" value="<?php echo $password; ?>" size="22" required>
						</div>
						<div class="two_quarter">
							<label for="url">Alamat</label>
							<input type="text" name="alamat" value="<?php echo $alamat; ?>" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="url">No Telp</label>
							<input type="text" name="notelp" value="<?php echo $notelp; ?>" size="22" required>
						</div>
						<div>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
						</div>
						<div class="three_quarter first">
							<a href="<?php echo site_url('admin') ?>" class="btn btn-default" >Cancel</a>
						</div>
						<div class="one_quarter">
							<input type="submit">
						</div>						</form>
						
					</div>
					<!-- ################################################################################################ -->
				</div>
				<!-- ################################################################################################ -->
			</main>
		</div>
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<?php 
		$this->load->view('templates/footer_admin');
		?>
	</body>
	</html>