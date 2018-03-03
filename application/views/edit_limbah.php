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
        <center>DATA LIMBAH B3 PADA TEMPAT PENYIMPANAN SEMENTARA</center>
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="container">
        <!-- left column -->
        <div class="col-xs-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <center><b><h1 class="box-title">Edit Data Limbah</h1></b></center>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <?php 
            $no = 1;
            foreach($limbah as $l){ ?>
            <form role="form" action="<?php echo base_url(). 'user/update'; ?>" method="post">
              
              <div class="box-body">
                <div class="form-group">
                  <label>Id</label>
                  <input type="hidden" name="id" value="<?php echo $l->id?>">
                  <input class="form-control" type="text" name="id_limbah" value="<?php echo $l->id_limbah ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Limbah </label>
                  <input class="form-control" type="text" name="jenis_limbah" value="<?php echo $l->jenis_limbah ?>">
                </div>
                <div class="form-group">
                  <label>Foto </label><br>
                  <img src="<?php echo base_url() . 'assets/images/'.$l->id.'.jpg'  ?>" class="img-thumbnail" alt="Foto Limbah" width="304" height="236"/>
                  <input type="file" name="foto" value="<?php echo $l->jenis_limbah ?>">
                </div>
                <div class="form-group">
                  <label>Jumlah Limbah</label>
                  <input class="form-control" type="text" name="jumlah" value="<?php echo $l->jumlah ?>">
                </div>
                <div class="form-group">
                  <label>Masa Berlaku (Hari) </label>
                  <input class="form-control" type="text" name="masa_berlaku" value="<?php echo $l->masa_berlaku ?>">
                </div>
                <div class="form-group">
                  <label>Sumber Limbah</label>
                  <input class="form-control" type="text" name="sumber" value="<?php echo $l->sumber ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk </label>
                  <input class="form-control" type="date" name="tgl_masuk" value="<?php echo $l->tgl_masuk ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Keluar </label>
                  <input class="form-control" type="date" name="tgl_keluar" value="<?php echo $l->tgl_keluar ?>">
                </div>
                <div class="form-group">
                 <label>Keterangan </label><br>
                  <textarea class="form-control" type="text" name="keterangan" value="<?php echo $l->keterangan ?>"></textarea> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" href="<?php echo base_url(). 'view/tampil_limbah'; ?>" method="post">Submit</button>
              </div>
            </form>
            <?php } ?>
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
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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