<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $system_title ?> | <?= $page_title ?></title>

  <link rel="icon" type="image/png" href="<?= $system_svg ?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/fonts.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image : url(<?= $system_op ?> );background-repeat: no-repeat; background-size: 45%;background-position: center center;overflow:hidden;">
  <div class="login-box">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <!-- <img class="animation__shake" src="<?= $system_svg ?>" alt="AdminLTELogo" height="500" width="500"/> -->
      <a href="#" class="h1"><b>LOD</b>IS</a>
      <!-- Libertad Online Data-based Information System  -->
    </div>
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>LOD</b>IS</a>
      </div>
      <div class="card-body">
        <?php if ($this->input->get("login_attempt") == md5(0) || $this->input->get("login_attempt") == md5(1)) : ?>
          <p class="text-danger text-center text-sm"><i class="fa fa-exclamation-triangle"></i> Invalid Username or Password. Please try again.</p>
        <?php endif ?>
        <?php if ($this->input->get("login_attempt") != md5(0) || $this->input->get("login_attempt") != md5(1)) : ?>
          <p class="login-box-msg">Sign in to start your session</p>
        <?php endif ?>

        <form action="<?= base_url() ?>requestlogin" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control <?php if ($this->input->get("login_attempt") == md5(0)) : ?> is-invalid <?php endif ?>" placeholder="Email" autofocus autocomplete="off" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control <?php if ($this->input->get("login_attempt") == md5(0)) : ?> is-invalid <?php endif ?>" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div> -->
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-login mr-2"></i> Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->

        <!-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p> -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>

  <script>
    setInterval(function() {
      $.post("<?= base_url('Main/allow') ?>");
    }, 3000)
  </script>
  
</body>

</html>