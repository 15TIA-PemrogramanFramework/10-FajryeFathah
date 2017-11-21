<html>
<head>
  <title>Penjualan Atk Laskar Ilmu</title>
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
    <?php $this->load->view('templates/header_owner');?>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="home_owner">Home</a></li>
        <li><a href="admin">Admin</a></li>
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
        <h1>Admin percetakanlaskarilmu.co.id</h1>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($admin as $key => $value) {?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td><?php echo $value->password; ?></td>
                <td><?php echo $value->alamat; ?></td>
                <td><?php echo $value->notelp; ?></td>
                <td>
                  <?php echo anchor(site_url('admin/delete/'.$value->id_admin),
          '<i class="fa fa-trash"></i>',
          'class="btn btn-danger"'); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <div id="comments">
            <h2>Tambah data</h2>
            <form action="<?= site_url('admin/tambah_aksi');?>" method="post">
              <div class="one_quarter first">
                <label for="name">Nama<span>*</span></label>
                <input type="text" name="nama" value="" size="22" required>
              </div>
              <div class="two_quarter">
                <label for="email">Password<span>*</span></label>
                <input type="text" name="password" value="" size="22" required>
              </div>
              <div class="one_quarter">
                <label for="url">Alamat</label>
                <input type="text" name="alamat" value="" size="22" required="">
                <!-- <input type="text" name="nama_barang" value="" size="22" required> -->
              </div>
              <div class="one_quarter first">
                <label for="url">No Telp</label>
                <input type="number" name="notelp" value="" size="22" required>
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