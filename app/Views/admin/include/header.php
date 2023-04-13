
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin</title>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="<?= base_url() ?>index.html"><img src="<?= base_url() ?>/assets/images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>index.html"><img src="<?= base_url() ?>/assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="<?= base_url() ?>#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url() ?>/assets/images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/userlist') ?>">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Userlist</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/usercommet') ?>">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User Comments</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/client') ?>">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">View client</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="<?= base_url() ?>#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>/assets/pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>/assets/pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->