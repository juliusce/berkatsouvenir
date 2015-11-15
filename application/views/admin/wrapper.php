<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Berkat Souvenir | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>includes/datatables/Responsive-1.0.7/css/responsive.dataTables.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/select2/select2.min.css">

    <!-- Jasny bootstrap -->
    <link href="<?php echo base_url(); ?>includes/jqueryupload/jasny-bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- LOAD SCRIPT-->
  <!-- jQuery 2.1.4 -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?=base_url()?>includes/css_dashboard/bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <!--<script src="<?=base_url()?>includes/css_dashboard/plugins/morris/morris.min.js"></script>-->
  <!-- Sparkline -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?=base_url()?>includes/css_dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="<?=base_url()?>includes/css_dashboard/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>includes/css_dashboard/dist/js/app.min.js"></script>
  <!-- Select2 -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/select2/select2.full.min.js"></script>
  <!-- Ckeditor -->
  <script src="<?=base_url()?>includes/ckeditor/ckeditor.js"></script>
  <script src="<?=base_url()?>includes/ckeditor/adapters/jquery.js"></script>
  <!-- DataTables -->
  <script src="<?=base_url()?>includes/css_dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>includes/css_dashboard/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?=base_url()?>includes/datatables/Responsive-1.0.7/js/dataTables.responsive.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!--<script src="<?=base_url()?>includes/css_dashboard/dist/js/pages/dashboard.js"></script>-->
  <!-- LOAD SCRIPT-->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php $this->load->view('admin/header');?>

      <!-- Content Wrapper. Contains page content -->
      <?php $this->load->view($body); ?>
      <?php $this->load->view('admin/footer');?>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- AdminLTE for demo purposes -->
    <!-- Page script -->
    <script type="text/javascript">
      var base_url = '<?= base_url()?>';
      var uploadURI = '<?=base_url()?>upload';
    </script>
    <script src="<?=base_url()?>includes/custom/js/app.js"></script>
    <script src="<?=base_url()?>includes/custom/js/ajaxpost.js"></script>

    <script src="<?php echo base_url(); ?>includes/jqueryupload/jasny-bootstrap.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!--<script>
    $(document).ready(function(){

      $('.inputTypeUsulan').keyup(function(){
        alert('asdasda');
        var obat = $(this).val();
        alert(obat);
      });
    });
  </script>-->
  </body>
</html>
