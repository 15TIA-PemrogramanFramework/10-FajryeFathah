<html>
<head>
	<title>Percetakan Laskar Ilmu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="<?= base_url();?>layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- Top Background Image Wrapper -->
	<div class="bgded overlay" style="background-image:url('<?= base_url();?>images/demo/backgrounds/1.png');"> 	<!-- ################################################################################################ -->
		<?php $this->load->view('templates/header_admin');?>
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<div id="breadcrumb" class="hoc clear"> 
			<!-- ################################################################################################ -->
			<ul>
				<li><a href="home_admin">Home</a></li>
				<li><a href="percetakan">Percetakan</a></li>
				<li><a href="percetakan_edit">Edit</a></li>
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
					<form action="<?= site_url('percetakan/edit_aksi');?>" method="post">
						<!-- pilihan baris pertama -->
						<div class="one_quarter first">
							<label for="name">Tanggal <span>*</span></label>
							<input type="date" name="tanggal" value="<?php echo $tanggal; ?>" size="22" required>
						</div>
						<div class="two_quarter">
							<label for="url">&nbsp;</label>
							<input type="text" name="atas_nama" value="<?php echo $atas_nama; ?>" size="22" placeholder="Atas Nama" required>
						</div>
						<div class="one_quarter">
							<label for="url">Jenis Cetakan</label>
							<select type="select" name="jns_cetakan" required>
								<option selected disabled hidden>Choose Here</option>
								<option value="GTO">GTO</option>
								<option value="Besti">Besti</option>
								<option value="Digital Printing">Digital Printing</option>
								<option value="Percetakan">Percetakan</option>
							</select>
						</div>

						<!-- pilihan baris kedua -->
						<div class="">
							<label for="url">&nbsp;</label>
							<input type="text" name="keterangan" value="<?php echo $keterangan; ?>" placeholder="Keterangan" size="22" required>
						</div>

						<!-- pilihan baris tiga -->
						<div class="one_quarter first">
							<label for="url">&nbsp;</label>
							<input type="text" name="ukuran" value="<?php echo $ukuran; ?>" placeholder="Ukuran" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="url">&nbsp;</label>
							<input type="number" name="harga" value="<?php echo $harga; ?>" placeholder="Harga" size="22" required>
						</div>
						<div class="one_quarter">
							<label for="url">&nbsp;</label>
							<input type="number" name="jumlah" value="<?php echo $jumlah; ?>" size="22" placeholder="Jumlah" required>
						</div>
						<div class="one_quarter">
							<label for="url">Satuan</label>
							<select type="select" name="satuan" required>
								<option selected disabled hidden>Choose Here</option>
								<option value="Rim">Rim</option>
								<option value="Lbr">Lembar</option>
								<option value="Bh">Buah</option>
							</select>
						</div>

						<!-- pilihan baris empat -->
						<div class="">
							<label for="url">&nbsp;</label>
							<input type="number" name="total" value="<?php echo $total; ?>" placeholder="Total" size="22" required>
						</div>
						
						<div>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
						</div>
						<div>
							<input type="hidden" name="admin" value="<?php echo $admin; ?>">
						</div>
						<div class="three_quarter first">
							<a href="<?php echo site_url('percetakan') ?>" class="btn btn-default" >Cancel</a>
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