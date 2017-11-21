<html>
<head>
	<title>Percetakan Laskar Ilmu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- Top Background Image Wrapper -->
	<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/1.png');"> 
		<!-- ################################################################################################ -->
		<?php $this->load->view('templates/header_admin');?>
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<div id="breadcrumb" class="hoc clear"> 
			<!-- ################################################################################################ -->
			<ul>
				<li><a href="home_admin">Home</a></li>
				<li><a href="percetakan">Percetakan</a></li>
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
				<h1>Rekapitulasi Percetakan</h1>
				<div class="scrollable">
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Tanggal</th>
								<th>Admin</th>
								<th>Atas Nama</th>
								<th>jns_cetakan</th>
								<th>Keterangan</th>
								<th>Ukuran</th>
								<th>harga</th>
								<th>jumlah</th>
								<th>Satuan</th>
								<th>total</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($percetakan as $key => $value) {?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value->tanggal; ?></td>
								<td><?php echo $value->admin; ?></td>
								<td><?php echo $value->atas_nama; ?></td>
								<td><?php echo $value->jns_cetakan; ?></td>
								<td><?php echo $value->keterangan; ?></td>
								<td><?php echo $value->ukuran; ?></td>
								<td><?php echo $value->harga; ?></td>
								<td><?php echo $value->jumlah; ?></td>
								<td><?php echo $value->satuan; ?></td>
								<td><?php echo $value->total; ?></td>
								<td>
									<?php echo anchor(site_url('percetakan/edit/'.$value->id),
										'<i class="fa fa-pencil"></i>',
										'class="btn btn-warning"'); ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

					<div id="comments">
						<h2>Tambah data</h2>
						<form action="<?= site_url('percetakan/tambah_aksi');?>" method="post">

							<!-- pilihan baris pertama -->
							<div class="one_quarter first">
								<label for="name">Tanggal <span>*</span></label>
								<input type="date" name="tanggal" value="" size="22" required>
							</div>
							<div class="two_quarter">
								<label for="url">&nbsp;</label>
								<input type="text" name="atas_nama" value="" size="22" placeholder="Atas Nama" required>
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
								<input type="text" name="keterangan" value="" size="22" placeholder="Keterangan" required>
							</div>

							<!-- pilihan baris tiga -->
							<div class="one_quarter first">
								<label for="url">&nbsp;</label>
								<input type="text" name="ukuran" value="" size="22" placeholder="Ukuran" required>
							</div>
							<div class="one_quarter">
								<label for="url">&nbsp;</label>
								<input type="number" name="harga" value="" size="22" placeholder="Harga" required>
							</div>
							<div class="one_quarter">
								<label for="url">&nbsp;</label>
								<input type="number" name="jumlah" value="" size="22" placeholder="Jumlah" required>
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
								<input type="number" name="total" value="" size="22" placeholder="Total" required>
							</div>

							<div class="three_quarter first">
								<input type="reset" value="Reset">
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