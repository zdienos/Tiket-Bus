<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/backend/css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('backend/login/daftar') ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" value="<?php echo set_value('name') ?>" placeholder="Full Name">
                    <?php echo form_error('name'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" placeholder="Email Address" name="email" value="<?php echo set_value('email') ?>">
                  <?php echo form_error('email'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Username" name="username" value="<?php echo set_value('username') ?>">
                  <?php echo form_error('username'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                 <?php echo form_error('password'),'<small class="text-danger pl-3">','</small>'; ?>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button> 
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>

</body>

</html>
