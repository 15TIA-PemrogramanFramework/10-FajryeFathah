  <html>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Owner Laskar Ilmu</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="<?php echo site_url('home_owner'); ?>">Beranda</a></li>
          <!-- <li><a class="drop" href="#">Melayani</a>
            <ul>
              <li><a href="pages/gallery.html">Percetakan</a></li>
              <li><a href="pages/full-width.html">Penjualan ATK</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a href="<?=site_url('percetakan_owner')?>">Percetakan</a></li>
          <li><a href="<?=site_url('penjualanatk_owner')?>">Penjualan ATK</a></li>
          <li><a href="<?=site_url('user_owner')?>">Pelanggan</a></li>
          <li><a href="<?=site_url('admin')?>">Admin</a></li>
          <li><a href="<?php echo site_url('masuk_owner/logout'); ?>">Keluar</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  </html>