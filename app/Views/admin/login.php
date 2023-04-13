<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets//vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form action="<?php echo base_url('admin/login'); ?>" method="post" class="pt-3">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="ti-user text-primary"></i>
                      </span>
                    </div>
                    <input  class="form-control" type="email" name="email" placeholder="Email"  required  >
                  </div>
                </div>
                <div class="my-3">
                <input type="submit" class="btn btn-primary px-5 p-2" value="Log In">
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url() ?>/assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url() ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/assets/js/template.js"></script>
  <script src="<?= base_url() ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
