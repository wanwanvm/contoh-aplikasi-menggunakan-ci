<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAPA-PROPOSAL|LINK</title>
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
                    <small></small>PENYALURAN
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">PENYALURAN </li>
                </ol>
            </section>

            <!-- Main content -->

            <section class="content">

                <div class="row">

                    <div class="col-xs-12">


                        <div class="box">

                            <div class="box-body">
                                <div class="container">
                                    <h1>Edit Penyaluran </h1>
                                    <?php foreach ($data3->result_array() as $i) :
                                        $kdpenyaluran = $i['kdpenyaluran'];
                                        $idkegiatan = $i['idkegiatan'];
                                        $idlvl5 = $i['idlvl5'];
                                        $nmpenyaluran  = $i['nmpenyaluran'];
                                        $nmpenerima = $i['nmpenerima'];
                                        $jabatan = $i['jabatan'];
                                        $alamat = $i['alamat'];
                                        $nompenyaluran = $i['nompenyaluran'];
                                        $tgltransaksi = $i['tgltransaksi'];

                                        $ketua = $i['ketua'];
                                        $bendahara = $i['bendahara'];
                                        $tgl_a = date('d-m-Y', strtotime($tgltransaksi));

                                    ?>
                                        <form action="<?php echo base_url() . 'panitia/tambahpenyaluran/edit_data' ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="nama">Kode Transaksi:</label>
                                                <input Type="Text" name="kdpenyaluran" value="<?php echo "$kdpenyaluran"; ?>" class="form-control" readonly>
                                            </div>




                                            <div class="form-group">
                                                <label for="alamat">Akun :</label>
                                                <select name="idlvl5" id="idlvl5" required class="form-control">
                                                    <option value="">-PILIH-</option>

                                                    <?php foreach ($data->result() as $row) : ?>
                                                        <?php if ($row->idlvl5 == $idlvl5) { ?>
                                                            <option selected value="<?php echo $row->idlvl5; ?>"><?php echo $row->kdakun5; ?> <?php echo $row->nmakun5; ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $row->idlvl5; ?>"><?php echo $row->kdakun5; ?> <?php echo $row->nmakun5; ?></option>

                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="nama">Nama Transaksi:</label>
                                                <input Type="Text" name="nmpenyaluran" class="form-control" value="<?php echo "$nmpenyaluran"; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Nama Penerima:</label>
                                                <input Type="Text" name="nmpenerima" class="form-control" value="<?php echo "$nmpenerima"; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Jabatan:</label>
                                                <input Type="Text" name="jabatan" class="form-control" value="<?php echo "$jabatan"; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Alamat:</label>
                                                <input Type="Text" name="alamat" class="form-control" value="<?php echo "$alamat"; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nominal Penyaluran: * tidak dapat di ubah silahkan hapus transaksi untuk menggantinya </label>
                                                <input Type="Text" name="nompenyaluran" class="form-control" value="<?php echo "$nompenyaluran"; ?>" readonly required>
                                            </div>


                                            <div class="form-group">
                                                <label for="nama">Tanggal Transaksi:</label>
                                                <input Type="Text" data-date-format="dd-mm-yyyy" name="tgltransaksi" id="tgltransaksi" class="form-control" value="<?php echo "$tgl_a"; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Di Setujui :</label>
                                                <select name="ketua" id="ketua" required class="form-control">
                                                    <option value="">-PILIH-</option>
                                                    <?php foreach ($jabat->result() as $row) : ?>
                                                        <?php if ($row->nmpejabat == $ketua) { ?>
                                                            <option selected value="<?php echo $row->nmpejabat; ?>"><?php echo $row->nmpejabat; ?>
                                                            <?php } else { ?>
                                                            <option value="<?php echo $row->nmpejabat; ?>"><?php echo $row->nmpejabat; ?>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Di Bayar :</label>
                                                <select name="bendahara" id="bendahara" class="form-control" required>
                                                    <option value="">-PILIH-</option>
                                                    <?php foreach ($jabat->result() as $row) : ?>
                                                        <?php if ($row->nmpejabat == $bendahara) { ?>
                                                            <option selected value="<?php echo $row->nmpejabat; ?>"><?php echo $row->nmpejabat; ?>
                                                            <?php } else { ?>
                                                            <option value="<?php echo $row->nmpejabat; ?>"><?php echo $row->nmpejabat; ?>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                </select>
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
                $('#idkegiatan').change(function() {
                    var idkegiatan = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>/panitia/tambahpenyaluran/get_pagu",
                        method: "POST",
                        data: {
                            idkegiatan: idkegiatan
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;

                            //html += '<option value="' + '0 ' + '">' + '-PILIH-' + '</option>';
                            for (i = 0; i < data.length; i++) {

                                //var json = data,
                                //obj = JSON.parse(json);
                                //$( '#sisapagu' ).mask('000.000.000', {reverse: true});
                                $('#sisapagu').val(data[i].sisapagu);
                                $('#pagu').val(data[i].pagu);

                                //$('#jurusan').val(obj.jurusan);
                                //$('#alamat').val(obj.alamat);
                                //html += '<input Type="Text" name="idpagu" id="idpagu" value="' + data[i].sisapagu + '"/>' ; 
                                //  html'<value="'+ data[i].idkegiatan  +'" >'  
                                //  html +='<input type="text" value="'+ data[i].idkegiatan +'"/>' ;
                            }

                            $('.idpagu').html(html);

                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#idprogram').change(function() {
                    var idprogram = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>/panitia/tambahkegiatan/get_subprogram",
                        method: "POST",
                        data: {
                            idprogram: idprogram
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;
                            html += '<option value="' + '0 ' + '">' + '-PILIH-' + '</option>';
                            for (i = 0; i < data.length; i++) {
                                //html'<input type="'+ text +'" value="'+ data[i].kdakun3  +'" >'  
                                html += '<option value="' + data[i].idsubp + '">' + data[i].kdsubp + ' ' + data[i].nmsubp + '</option>';
                            }
                            $('.idsubp').html(html);

                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#akun3').change(function() {
                    var kdakun3 = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>/panitia/tambahlvl5/get_akun4",
                        method: "POST",
                        data: {
                            kdakun3: kdakun3
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;
                            html += '<option value="' + '0 ' + '">' + '-PILIH-' + '</option>';
                            for (i = 0; i < data.length; i++) {
                                //html'<input type="'+ text +'" value="'+ data[i].kdakun3  +'" >'  
                                html += '<option value="' + data[i].kdakun3 + '">' + data[i].kdakun4 + ' ' + data[i].nmakun4 + '</option>';
                            }
                            $('.akun4').html(html);

                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            /**
             * Date picker.
             */
            // Tanggal Lahir.
            $('#tgltransaksi').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
                todayHighlight: true,
                startView: 'decade'
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
        <?php if ($this->session->flashdata('msg') == 'error-pagu') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Pagu Yang tersedia Tidak Cukup.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'error-nom') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Nominal anda  masih kosong.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'error-thn') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Sesuaikan tanggal transaksi dengan tahun anggaran.",
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