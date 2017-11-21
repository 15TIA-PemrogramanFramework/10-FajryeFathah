<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Admin</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="about">
  <p>
  Login Owner
  </p>
</section>

  <form method="post" action="" class="login">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="username" value="">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" value="">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>
  </form>

  <section class="about">
    <p class="about-author">Copyright &copy; 2016<br><a href="<?php echo site_url('index'); ?>">percetakanlaskarilmu.co.id</a>
  </section>

  <!-- ini berguna untuk menampilkan kesalahan login -->
                <?php echo $this->session->flashdata('gagal');?>
</body>
</html>
