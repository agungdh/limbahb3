<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Limbah B3</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        Limbah Bahan Berbahaya Beracun
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="logo" href="<?php echo base_url('assets/images/logo-pln.png') ?>"></a>
                
                <div class="body">
                  <div class="col-md-2">
                  <center>
                    <img src="<?php echo base_url('assets/images/logo-pln.png') ?>" style="height: 150px; width: 100px;">  
                  </center>
                </div>

              <div class="col-md-8" >
                <center>
                  <h4><b>NERACA LIMBAH B3 PADA TEMPAT PENYIMPANAN SEMENTARA</b></h4>
                  UNIT&nbsp; &nbsp; &nbsp; &nbsp;: <BR/>

                  BULAN &nbsp;: <BR/>
                </center>
              </div>
                </div>

                <br/>
                  
                
              <h3 class="box-title">
                <a type="button" class="btn btn-block btn-success" href="<?php echo base_url('neraca/tambah/') ?>">Tambah Data</a>
                <a type="button" class="btn btn-block btn-primary" href="<?php echo base_url('neraca/export/') ?>">Export Data</a>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">  
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Limbah</th>
                  <th>Sumber Limbah</th>
                  <th>Sisa Limbah dari Bulan Sebelumnya (Kg)</th>
                  <th>Jumlah Limbah Masuk (Kg)</th>
                  <th>Jumlah Limbah Keluar (Hari)</th>
                  <th>Sisa Limbah yang ada di TPS</th>
                  <th>Tujuan Penyerahan Limbah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($neraca as $n){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $n->id ?></td>
                  <td><?php echo $n->nama_limbah ?></td>
                  <td><?php echo $n->sumber_limbah ?></td>
                  <td><?php echo $n->sisa_limbah_lalu ?></td>
                  <td><?php echo $n->jmlh_limbah_masuk ?></td>
                  <td><?php echo $n->jmlh_limbah_keluar ?></td>
                  <td><?php echo $n->sisa_limbah_tps ?></td>
                  <td><?php echo $n->tujuan_limbah_keluar ?></td>
                  <td>
                    <a class="btn btn-block btn-warning" href="<?php echo base_url('neraca/edit/'.$n->id) ?>">Edit</a>
                    <a class="btn btn-block btn-danger" href="<?php echo base_url('neraca/hapus/'.$n->id) ?>" >Hapus</a>
                    <a class="btn btn-block btn-info" href="<?php echo base_url('neraca/upload/'.$n->id) ?>">Upload</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>No</th>
                  <th>Nama Limbah</th>
                  <th>Sumber Limbah</th>
                  <th>Sisa Limbah dari Bulan Sebelumnya (Kg)</th>
                  <th>Jumlah Limbah Masuk (Kg)</th>
                  <th>Jumlah Limbah Keluar (Hari)</th>
                  <th>Sisa Limbah yang ada di TPS</th>
                  <th>Tujuan Penyerahan Limbah</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
<!-- DataTables -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
