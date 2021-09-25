<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BAZNAS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'theme/images/logo-dark.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        $this->load->view('panitia/v_header');
        ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php
        $this->load->view('panitia/v_samping');
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    DATA
                    <small></small>SUB PROGRAM
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">SUB PROGRAM</li>
                </ol>
            </section>

            <!-- Main content -->

            <section class="content">

                <div class="row">

                    <div class="col-xs-12">


                        <div class="box">

                            <div class="box-body">
                                <div class="container">
                                    <h1>Edit data Sub Program</h1>

                                    <?php foreach ($data3->result_array() as $i) :
                                        $idsubp = $i['idsubp'];

                                        $kdsubp = $i['kdsubp'];

                                        $nmsubp = $i['nmsubp'];

                                    ?>
                                        <form action="<?php echo base_url() . 'panitia/tambahsubprogram/edit_data' ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="nama">Kode Sub Program:</label>
                                                <input Type="Text" name="kdsubp" value="<?php echo "$kdsubp";  ?>" class="form-control">

                                                <input Type="hidden" name="idsubp" value="<?php echo "$idsubp";  ?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Nama Sub Program:</label>
                                                <input Type="Text" name="nmsubp" value="<?php echo "$nmsubp";  ?>" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>

                                        </form>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2020 <a href="">BAZNAS</a>.</strong> All rights reserved.
        </footer>

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
        <!-- page script -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('#grandp').change(function() {
                    var grandp = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>/panitia/tambahsubprogram/get_program",
                        method: "POST",
                        data: {
                            grandp: grandp
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;
                            html += '<option value="' + '0 ' + '">' + '-PILIH-' + '</option>';
                            for (i = 0; i < data.length; i++) {

                                html += '<option value="' + data[i].idprogram + '">' + data[i].kdprogram + ' ' + data[i].nmprogram + '</option>';
                            }

                            $('.program').html(html);

                        }
                    });
                });
            });
        </script>

        <script>
            $(function() {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });

                $('#datepicker').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
                });
                $('#datepicker2').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
                });
                $('.datepicker3').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
                });
                $('.datepicker4').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
                });
                $(".timepicker").timepicker({
                    showInputs: true
                });

            });
        </script>
        <?php if ($this->session->flashdata('msg') == 'error') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
            </script>

        <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Berhasil Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Pengumuman berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pengumuman Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
            </script>
        <?php else : ?>

        <?php endif; ?>
</body>

</html>