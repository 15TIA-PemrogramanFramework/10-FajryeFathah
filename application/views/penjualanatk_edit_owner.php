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
	<div class="bgded overlay" style="background-image:url('<?= base_url();?>images/demo/backgrounds/1.png');"> 
		<!-- ################################################################################################ -->
		<?php $this->load->view('templates/header_owner');?>
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<div id="breadcrumb" class="hoc clear"> 
			<!-- ################################################################################################ -->
			<ul>
				<li><a href="home_owner">Home</a></li>
				<li><a href="penjualanatk_owner">Penjualan ATK</a></li>
				<li><a href="penjualanatk_edit_owner">Edit</a></li>
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
					<form action="<?= site_url('penjualanatk_owner/edit_aksi');?>" method="post">
						<div class="one_quarter first">
							<label for="name">Tanggal <span>*</span></label>
							<input type="date" name="tanggal" value="<?php echo $tanggal; ?>" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="email">Atas Nama <span>*</span></label>
							<input type="text" name="atas_nama" value="<?php echo $atas_nama; ?>" size="22" required>
						</div>
						<div class="two_quarter">
							<label for="url">Nama Barang</label>
							<input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" size="22" required>
						</div>
						<div class="one_quarter first">
							<label for="url">Harga</label>
							<input type="number" name="harga" value="<?php echo $harga; ?>" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="url">Jumlah</label>
							<input type="number" name="jumlah" value="<?php echo $jumlah; ?>" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="url">Satuan</label>
							<select type="select" name="satuan" required>
								<option selected disabled hidden>Choose Here</option>
								<option value="Rim">Rim</option>
								<option value="Lbr">Lembar</option>
								<option value="Bh">Buah</option>
								<option value="Dz">Doze</option>
								<option value="Lsn">Lusin</option>
							</select>
						</div>
						<div class="one_quarter">
							<label for="url">Total</label>
							<input type="number" name="total" value="<?php echo $total; ?>" size="22" required>
						</div>
						<div>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
						</div>
						<div>
							<input type="hidden" name="admin" value="<?php echo $admin; ?>">
						</div>
						<div class="three_quarter first">
							<a href="<?php echo site_url('penjualanatk_owner') ?>" class="btn btn-default" >Cancel</a>
						</div>
						<div class="one_quarter">
							<input type="submit" >
						</div>
					</form>
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