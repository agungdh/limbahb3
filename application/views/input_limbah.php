<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/dist') ?>/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/dist') ?>/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('template/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('template/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA LIMBAH B3 PADA TEMPAT PENYIMPANAN SEMENTARA
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="container">
        <!-- left column -->
        <div class="col-xs-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Limbah</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(). 'user/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
              
              <div class="box-body">
                <div class="form-group">
                  <label>Id</label>
                  <input class="form-control" type="text" name="id_limbah" placeholder="Id Limbah">
                </div>
                <div class="form-group">
                  <label>Jenis Limbah </label>
                  <input class="form-control" type="text" name="jenis_limbah" placeholder="Jenis Limbah">
                </div>
                <div class="form-group">
                  <label>Foto </label>
                  <input type="file" name="foto">
                </div>
                <div class="form-group">
                  <label>Jumlah Limbah (Kg)</label>
                  <input class="form-control" type="text" name="jumlah" placeholder="Jumlah Limbah">
                </div>
                <div class="form-group">
                  <label>Masa Berlaku (Hari) </label>
                  <input class="form-control" type="text" name="masa_berlaku" placeholder="Masa Berlaku Limbah">
                </div>
                <div class="form-group">
                  <label>Sumber Limbah</label>
                  <input class="form-control" type="text" name="sumber" placeholder="Sumber Limbah">
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk </label>
                  <input class="form-control" type="date" name="tgl_masuk">
                </div>
                <div class="form-group">
                  <label>Tanggal Keluar </label>
                  <input class="form-control" type="date" name="tgl_keluar">
                </div>
                <div class="form-group">
                 <label>Keterangan </label><br>
                  <textarea class="form-control" type="text" name="keterangan" placeholder="Keterangan Limbah"></textarea> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" href="<?php echo base_url(). 'view/tampil_limbah'; ?>" method="post">Submit</button>
              </div>
            </form>
          </div>

          <!-- /.box -->

        </div>
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('template/footer') ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/demo.js"></script>
</body>
</html>
