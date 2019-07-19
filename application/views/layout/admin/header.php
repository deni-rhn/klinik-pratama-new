<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Farmasi WebApp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/skins/_all-skins.min.css">
<!--    custom-->

    <link rel="stylesheet" href="<?php echo base_url('assets/');?>custom/mubarok.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- easycomplate -->
  <link href="<?php echo base_url('easycom/');?>easy-autocomplete.min.css" rel="stylesheet" type="text/css">
</head>
<style>
.overlay {
  position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 10;
    display: none;
    overflow: hidden;
}
.dp-pr {
    width: 100%;
    position: absolute;
    background: white;
    z-index: 11;
    bottom:33%;
    right: 0;
}

.dua {
  bottom:20% !important;
}

.modls {
    position: absolute;
    z-index: 3;
    border-radius: 5px;
    background: rgb(245, 245, 245);
    margin-top: 5px;
    display:none;
    padding:10px;
    width: 100%;
}

#back {
    padding: 20px 20px;
    display: none;
    color: black;
}

.my-pg {
  display:flex;
}
.wrap{
  list-style-type: none;
  padding:10px;
}

.myls-ct {
  display:flex;
}

</style>
<?php

$akses = $this->session->userdata('role_id');

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="overlay"></div>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../../pendaftaran.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PRT</b></span>
      <!-- logo for regular state and mobile devices -->
      <?php if($akses == 1) { ?>
        <span class="logo-lg"><b>ADMIN</b></span>
      <?php } ?>
      <?php if($akses == 2) { ?>
        <span class="logo-lg"><b>DOKTER</b></span>
      <?php } ?>
      <?php if($akses == 3) { ?>
        <span class="logo-lg"><b>KASIR</b></span>
      <?php } ?>
      <?php if($akses == 4) { ?>
        <span class="logo-lg"><b>REGISTER</b></span>
      <?php } ?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/');?>dist/img/prt.jpeg"" class="user-image" alt="User Image">
              <span class="hidden-xs">Klinik Pratama</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/');?>dist/img/prt.jpeg"" class="img-circle" alt="User Image">

                <p>
                Klinik Pratama
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php include 'sidebar.php' ;?>
