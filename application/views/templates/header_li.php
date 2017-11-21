  <html>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Laskar Ilmu</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="<?php echo site_url('home'); ?>">Beranda</a></li>
          <!-- <li><a class="drop" href="#">Melayani</a>
            <ul>
              <li><a href="pages/gallery.html">Percetakan</a></li>
              <li><a href="pages/full-width.html">Penjualan ATK</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a class="drop" href="#">Melayani</a>
            <ul>
              <li><a class="drop" href="#">Percetakan</a>
                <ul>
                  <li><a href="<?php echo site_url('gto'); ?>">GTO</a></li>
                  <li><a href="<?php echo site_url('spanduk'); ?>">Spanduk</a></li>
                  <li><a href="<?php echo site_url('separasi'); ?>">Besti</a></li>
                </ul>
              </li>
              <li><a href="<?php echo site_url('atk'); ?>">Penjualan ATK</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url('testimoni'); ?>">Testimoni</a></li>
          <li><a href="<?php echo site_url('masuk'); ?>">Masuk</a>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  </html>