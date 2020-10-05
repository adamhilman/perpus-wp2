<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan Lite | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    .bg-body {
      background-image: url("<?= base_url()?>images/bg-01.jpg");
      -webkit-filter: blur(5px);
      -moz-filter: blur(5px);
      -o-filter: blur(5px);
      -ms-filter: blur(5px);
      filter: blur(5px);
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1;
    }

    @media (min-width: 991px) {
      .login {
        width: 350px;
      }

      .bg-img {
        width: 100%;
      }
    }

    @media (max-width: 991px) {
      .login {
        width: 300px;
      }
    }
  </style>
</head>

<body>
  <div class="bg-body">
  </div>
  <div align="center">
    <div class="login" style="padding-top:300px;">
      <!-- /.login-logo -->
      <div class="card-body login-card-body" style="border-radius:10px;">
        <p class="login-box-msg">Silahkan Login</p>
        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == "error") { ?>
          <div class="alert" style="border:1px solid #ed0000;background-color:#ed0000;color:white">
            <strong style="color:yellow"><i class="fa fa-exclamation-triangle "></i> <b>Login failed!</b></strong><br>Invalid username or password
          </div>
        <?php } else if (isset($_GET['pesan']) && $_GET['pesan'] == "logout") { ?>
          <div class="alert" style="border:1px solid #00aeed;background-color:#00aeed;color:black">
            <strong style="color:yellow"><i class="fa fa-exclamation-triangle "></i> <b>Anda telah logout!</b></strong><br>Silahkan Login untuk masuk kembali
          </div>
        <?php } ?>
        <form action="<?= base_url()?>welcome/login" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </div>
  <!-- /.login-box -->
  <!-- jQuery -->
  <script src="<?= base_url()?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>dist/js/adminlte.min.js"></script>

</body>

</html>