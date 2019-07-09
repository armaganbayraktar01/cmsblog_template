<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?=Url::vendor('bootstrap/css/bootstrap.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=Url::vendor('ionicons/css/ionicons.min.css')?>">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="<?=Url::vendor('font-awesome/css/font-awesome.min.css')?>">
  <!-- Admin LTE -->
  <link rel="stylesheet" href="<?=Url::vendor('adminlte/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?=Url::vendor('adminlte/css/skins/_all-skins.min.css')?>">

  <!-- Custom -->
  <link rel="stylesheet" href="<?=Url::adpub('styles/main.min.css')?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- wrapper -->
  <div class="wrapper">

    <?php require View::admin('static/_menus/navbar'); ?>
    <?php require View::admin('static/_menus/sidebar'); ?>

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

