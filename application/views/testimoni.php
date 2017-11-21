<!DOCTYPE html>
<!--
Template Name: Overerts
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
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
    <?php $this->load->view('templates/header_li');?>
  </div>

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
      <li><a href="#">Testimoni</a></li>
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
        <h2>Testimoni Pelanggan</h2>
        <ul>
          <?php foreach ($user as $key => $value) {?>
          <li>
            <article>
              <?php $key+1; ?>
              <header>
                <figure class="avatar"><img src="images/demo/avatar.png" alt=""></figure>
                <address>
                  By <a><?php echo $value->nama; ?></a>
                </address>
                <time><?php echo $value->tanggal; ?></time>
              </header>
              <div class="comcont">
                <p><?php echo $value->comment; ?></p>
              </div>
            </article>
          </li>
          <?php } ?>
        </ul>

        <h2>Write A Comment</h2>
        <form action="<?=site_url('testimoni/tambah_aksi');?>"  method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="nama" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="mail" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="website" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<?php $this->load->view('templates/footer_li');?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

</body>
</html>