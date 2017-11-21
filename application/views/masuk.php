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
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
  <!-- <link rel="stylesheet" href="css/popup_style.css"> -->
  
</head>
<body>
<section class="about">
  <p>
  Login Admin
  </p>
</section>

<div class="container">
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
</div>

  <section class="about">
    <p class="about-author">Copyright &copy; 2016<br><a href="<?php echo site_url('index'); ?>">percetakanlaskarilmu.co.id</a>
  </section>

  <!-- ini berguna untuk menampilkan kesalahan login -->
                <?php echo $this->session->flashdata('gagal');?>

               <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>
</html>
