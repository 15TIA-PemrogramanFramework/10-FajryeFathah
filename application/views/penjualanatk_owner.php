<html>
<head>
  <title>Penjualan Atk Laskar Ilmu</title>
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
        <li><a href="home_owner">Home</a></li>
        <li><a href="penjualanatk_owner">Penjualan ATK</a></li>
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
        <h1>Rekapitulasi Penjualan ATK</h1>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Admin</th>
                <th>Atas Nama</th>
                <th>nama_barang</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>satuan</th>
                <th>total</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($penjualanatk_owner as $key => $value) {?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value->tanggal; ?></td>
                <td><?php echo $value->admin; ?></td>
                <td><?php echo $value->atas_nama; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->harga; ?></td>
                <td><?php echo $value->jumlah; ?></td>
                <td><?php echo $value->satuan; ?></td>
                <td><?php echo $value->total; ?></td>
                <td>
                  <?php echo anchor(site_url('penjualanatk_owner/edit/'.$value->id),
                    '<i class="fa fa-pencil"></i>',
                    'class="btn btn-warning"'); ?>
                  <?php echo anchor(site_url('penjualanatk_owner/delete/'.$value->id),
                    '<i class="fa fa-trash"></i>',
                    'class="btn btn-danger"'); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <!-- <div id="comments">
            <h2>Tambah data</h2>
            <form action="" method="post">
              <div class="one_quarter first">
                <label for="name">Tanggal <span>*</span></label>
                <input type="date" name="tanggal" value="" size="22" required>
              </div>
              <div class="two_quarter">
                <label for="email">Atas Nama <span>*</span></label>
                <input type="text" name="atas_nama" value="" size="22" required>
              </div>
              <div class="one_quarter">
                <label for="url">Nama Barang</label>
                <input type="text" name="nama_barang" value="" size="22" required=""> -->
                <!-- <input type="text" name="nama_barang" value="" size="22" required> -->
             <!--  </div>
              <div class="one_quarter first">
                <label for="url">Harga</label>
                <input type="number" name="harga" value="" size="22" required>
              </div>
              <div class="one_quarter">
                <label for="url">Jumlah</label>
                <input type="number" name="jumlah" value="" size="22" required>
              </div>
              <div class="two_quarter">
                <label for="url">Total</label>
                <input type="number" name="total" value="" size="22" required>
              </div>
              <div class="three_quarter first">
                <input type="reset" value="Reset">
              </div>
              <div class="one_quarter">
                <input type="submit" >
              </div>
            </form>
          </div> -->
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