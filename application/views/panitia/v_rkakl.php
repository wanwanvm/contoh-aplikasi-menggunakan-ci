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
                    <small></small>KEGIATAN
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">KEGIATAN </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box">
                                        <a class="fa fa-pencil-square-o btn btn-success " href="<?php echo base_url() . 'panitia/cetakpagu' ?>"> Cetak Rkakl</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table" border="1" cellspacing="0" id="example2" style="font-size:12px;">
                                                <thead>

                                                    <tr style="background-color: #20B2AA;">
                                                        <th width="5%" style="width:10px;" rowspan="2">
                                                            <center>KODE<br><br></center>
                                                        </th>


                                                        <th width="45%" rowspan="2" class="align-middle">

                                                            <center> PROGRAM/KEGIATAN/OUTPUT/SUBOUTPUT/KOMPONEN/SUBKOMP/KODE/DETAIL <br><br> </center>

                                                        <th width="5%" colspan="4">

                                                            <center> PERHITUNGAN TAHUN <?php
                                                                                        $tahun = $this->session->userdata('tahun');
                                                                                        echo "$tahun";

                                                                                        ?> </center>
                                                        </th>


                                                    </tr>
                                                    <tr style="background-color: #9370DB;">



                                                        <th width="5%">
                                                            Volume
                                                        </th>

                                                        <th scope="col" width="15%">
                                                            Harga Satuan
                                                        </th>

                                                        <th scope="col" width="10%">
                                                            <center>Total</center>
                                                        </th>
                                                        <th scope="col" width="10%">
                                                            <center>Aksi</center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    foreach ($data->result_array() as $i) :

                                                        $kdgrandp = $i['kdgrandp'];
                                                        $nmgrandp = $i['nmgrandp'];
                                                        $idgrandp = $i['idgrandp'];
                                                        // $kdprogram = $i['kdprogram'];
                                                        /*  $kdsubp = $i['kdsubp'];
                                                        $kdkomp = $i['kdkomp'];
                                                        $nmkomp = $i['nmkomp'];
                                                        $kdkegiatan = $i['kdkegiatan'];

                                                        $nmkegiatan = $i['nmkegiatan'];

                                                        $volume = $i['volume'];
                                                        $satuan = $i['satuan'];

                                                        $hargasatuan = $i['hargasatuan'];
                                                        $pagu = $i['pagu'];
*/
                                                        $query_total = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot FROM tb_program, tb_grandp, tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp AND tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.idgrandp='$idgrandp'");
                                                        foreach ($query_total->result_array() as $t) :

                                                            $tot = $t['tot'];

                                                    ?>
                                                            <tr style="background-color:#90EE90;">
                                                                <td height="22">
                                                                    <div><b><u><?php echo " $kdgrandp"; ?></u></b></div>
                                                                </td>

                                                                <td><u><b><?php echo " $nmgrandp"; ?></b></u></td>
                                                                </td>


                                                                <td></td>

                                                                <td></td>
                                                                <td align="right"><b><u>
                                                                            <?php echo 'Rp ' . number_format($tot); ?>
                                                                        </u></b></td>
                                                                <td><a class="fa fa-bars btn btn-danger" href="<?php echo base_url() . 'panitia/rkakl/hapus_grandp?idgrandp=' ?><?php echo $idgrandp; ?>" onclick="return confirm('Yakin anda akan Hapus data grandp? <?php echo $nmgrandp; ?>')"> Hapus</a> | <a class="fa fa-pencil-square-o btn btn-warning" href="<?php echo base_url() . 'panitia/rkakl/edit_grandp?idgrandp=' ?><?php echo $idgrandp; ?>" onclick="return confirm('Yakin anda akan mengubah Grand Program? <?php echo $nmgrandp; ?>')"> Edit</a></td>

                                                            </tr>
                                                            <?php


                                                            $query = $this->db->query("SELECT * FROM tb_program WHERE idgrandp='$idgrandp'");
                                                            foreach ($query->result_array() as $a) :

                                                                $nmprogram = $a['nmprogram'];
                                                                $kdprogram = $a['kdprogram'];
                                                                $idprogram = $a['idprogram'];

                                                                $query_total1 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot1 FROM tb_program, tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp AND tb_subprogram.idprogram=tb_program.idprogram  and tb_program.idprogram='$idprogram'");
                                                                foreach ($query_total1->result_array() as $t1) :

                                                                    $tot1 = $t1['tot1'];

                                                            ?>
                                                                    <tr style="background-color:#FFB6C1;">
                                                                        <td height="22">
                                                                            <div><?php echo "$kdprogram "; ?></div>
                                                                        </td>


                                                                        <td><?php echo "$nmprogram "; ?></td>

                                                                        <td></td>

                                                                        <td></td>
                                                                        <td align="right"><?php echo 'Rp ' . number_format($tot1); ?></td>
                                                                        <td><a class="fa fa-bars btn btn-danger" href="<?php echo base_url() . 'panitia/rkakl/hapus_prog?idprogram=' ?><?php echo $idprogram; ?>" onclick="return confirm('Yakin anda akan Hapus data program? <?php echo $nmprogram; ?>')"> Hapus</a> | <a class="fa fa-pencil-square-o btn btn-warning" href="<?php echo base_url() . 'panitia/rkakl/edit_prog?idprogram=' ?><?php echo $idprogram; ?>" onclick="return confirm('Yakin anda akan mengubah program? <?php echo $nmprogram; ?>')"> Edit</a></td>
                                                                    </tr>
                                                                    <?php


                                                                    $query2 = $this->db->query("SELECT * FROM tb_subprogram WHERE idprogram='$idprogram'");
                                                                    foreach ($query2->result_array() as $b) :

                                                                        $nmsubp = $b['nmsubp'];
                                                                        $kdsubp = $b['kdsubp'];
                                                                        $idsubp = $b['idsubp'];
                                                                        $query_total2 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot2 FROM tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp and tb_subprogram.idsubp='$idsubp'");
                                                                        foreach ($query_total2->result_array() as $t2) :

                                                                            $tot2 = $t2['tot2'];
                                                                    ?>
                                                                            <tr style="background-color:#E6E6FA;">
                                                                                <td height="22">
                                                                                    <div><?php echo "$kdsubp "; ?></div>
                                                                                </td>


                                                                                <td><?php echo "$nmsubp "; ?></td>

                                                                                <td></td>

                                                                                <td></td>
                                                                                <td align="right"><?php echo 'Rp ' . number_format($tot2); ?></td>
                                                                                <td><a class="fa fa-bars btn btn-danger" href="<?php echo base_url() . 'panitia/rkakl/hapus_subp?idsubp=' ?><?php echo $idsubp; ?>" onclick="return confirm('Yakin anda akan Hapus data sub program? <?php echo $nmsubp; ?>')"> Hapus</a> | <a class="fa fa-pencil-square-o btn btn-warning" href="<?php echo base_url() . 'panitia/rkakl/edit_subp?idsubp=' ?><?php echo $idsubp; ?>" onclick="return confirm('Yakin anda akan mengubah data ? <?php echo $nmsubp; ?>')"> Edit</a></td>

                                                                            </tr>
                                                                            <?php


                                                                            $query3 = $this->db->query("SELECT * FROM tb_komponen WHERE idsubp='$idsubp'");
                                                                            foreach ($query3->result_array() as $c) :

                                                                                $nmkomp = $c['nmkomp'];
                                                                                $kdkomp = $c['kdkomp'];
                                                                                $idkomp = $c['idkomp'];
                                                                                $query_total3 = $this->db->query("SELECT sum(tb_kegiatan.pagu) as tot3 FROM tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp  and tb_komponen.idkomp='$idkomp'");
                                                                                foreach ($query_total3->result_array() as $t3) :

                                                                                    $tot3 = $t3['tot3'];
                                                                            ?>
                                                                                    <tr style="background-color:#FFDAB9;">
                                                                                        <td height="22">
                                                                                            <div><?php echo "$kdkomp "; ?></div>
                                                                                        </td>


                                                                                        <td><?php echo "$nmkomp "; ?></td>

                                                                                        <td></td>

                                                                                        <td></td>
                                                                                        <td align="right"><?php echo 'Rp ' . number_format($tot3); ?></td>
                                                                                        <td><a class="fa fa-bars btn btn-danger" href="<?php echo base_url() . 'panitia/rkakl/hapus_komp?idkomp=' ?><?php echo $idkomp; ?>" onclick="return confirm('Yakin anda akan Hapus data Komponen? <?php echo $nmkomp; ?>')"> Hapus</a> | <a class="fa fa-pencil-square-o btn btn-warning" href="<?php echo base_url() . 'panitia/rkakl/edit_komp?idkomp=' ?><?php echo $idkomp; ?>" onclick="return confirm('Yakin anda akan Mengubah data komponen? <?php echo $nmkomp; ?>')"> Edit</a></td>

                                                                                    </tr>

                                                                                    <?php


                                                                                    $query4 = $this->db->query("SELECT * FROM tb_kegiatan WHERE idkomp='$idkomp'");
                                                                                    foreach ($query4->result_array() as $d) :

                                                                                        $idkegiatan = $d['idkegiatan'];
                                                                                        //$idkegiatan2 = $d['idkegiatan'];

                                                                                        $kdkegiatan = $d['kdkegiatan'];
                                                                                        $nmkegiatan = $d['nmkegiatan'];
                                                                                        $volume = $d['volume'];
                                                                                        $satuan = $d['satuan'];
                                                                                        $hargasatuan = $d['hargasatuan'];
                                                                                        $jumlah = $volume * $hargasatuan;
                                                                                    ?>
                                                                                        <tr style="background-color:#AFEEEE;">
                                                                                            <td height="22">
                                                                                                <div><?php echo "$kdkegiatan "; ?></div>
                                                                                            </td>


                                                                                            <td><?php echo "$nmkegiatan "; ?></td>

                                                                                            <td><?php echo "$volume $satuan "; ?> </td>

                                                                                            <td align="right">
                                                                                                <?php echo 'Rp ' . number_format($hargasatuan); ?>
                                                                                            </td>
                                                                                            <td align="right"><?php echo 'Rp ' . number_format($jumlah); ?></td>
                                                                                            <td><a class="fa fa-bars btn btn-danger" href="<?php echo base_url() . 'panitia/rkakl/hapus_kegiatan?idkegiatan=' ?><?php echo $idkegiatan; ?>" onclick="return confirm('Yakin anda akan Hapus data kegiatan? <?php echo $kdkegiatan; ?>')"> Hapus</a> | <a class="fa fa-bars btn btn-warning" href="<?php echo base_url() . 'panitia/rkakl/edit_kegiatan?idkegiatan=' ?><?php echo $idkegiatan; ?>" onclick="return confirm('Yakin anda akan Mengedit data kegiatan? <?php echo $kdkegiatan; ?>')"> Edit</a> </td>

                                                                                        </tr>
                                                                                    <?php endforeach; ?>
                                                                                <?php endforeach; ?>
                                                                            <?php endforeach; ?>
                                                                        <?php endforeach; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endforeach; ?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>
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
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2019 <a href="">SAPA-PROPOSAL</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">x</h4>

                                    <p>x</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading" xe</h4>
                                        <p>x</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading"></h4>

                                    <p></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/agenda/simpan_agenda' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="xmulai" class="form-control pull-right" id="datepicker" required>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date range -->
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="xselesai" class="form-control pull-right" id="datepicker2" required>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                            <div class="col-sm-7">
                                <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                            <div class="col-sm-7">
                                <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php foreach ($data2->result_array() as $i) :
        $idkegiatan = $i['idkegiatan'];
        // $idkegiatan = $i['idkegiatan'];
        //$idkegiatan2 = $d['idkegiatan'];

        $kdkegiatan = $i['kdkegiatan'];
        $nmkegiatan = $i['nmkegiatan'];
        $volume = $i['volume'];
        $satuan = $i['satuan'];
        $hargasatuan = $i['hargasatuan'];
        $jumlah = $volume * $hargasatuan;

    ?>
        <!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $idkegiatan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kegiatan</h4>
                    </div>


                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/agenda/update_agenda' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kd Kegiatan</label>
                                <div class="col-sm-7">
                                    <input type="hidden" name="idkegiatan" value="<?php $idkegiatan; ?>">
                                    <input type="text" name="kdkegiatan" class="form-control" value="<?php echo $kdkegiatan; ?>" id="inputUserName" placeholder="Kd Kegiatan" required>
                                </div>
                            </div>


                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Kegiatan</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="nmkegiatan" rows="2">	<?php echo $nmkegiatan; ?></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Volume</label>
                                <div class="col-sm-7">
                                    <input type="text" name="volume1" id="volume1" class="form-control" value="<?php echo $volume; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Satuan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="satuan" class="form-control" value="<?php echo $satuan; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Harga Satuan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="hargasatuan1" id="hargasatuan1" class="form-control" value="<?php echo $hargasatuan; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Total</label>
                                <div class="col-sm-7">
                                    <input type="text" name="pagu1" id="pagu1" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

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
            $("#hargasatuan1, #volume1").keyup(function() {
                var hargasatuan1 = $("#hargasatuan1").val();
                var volume1 = $("#volume1").val();

                var pagu1 = parseInt(hargasatuan1) * parseInt(volume1);
                $("#pagu1").val(pagu1);
            });
        });
    </script>



    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "border": true,
                "searching": true,
                "ordering": false,
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

    <?php elseif ($this->session->flashdata('msg') == 'success-edit') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Kegiatan sukses di ubah.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-edit-komp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Komponen sukses di ubah.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-edit-subp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Sub Program sukses di ubah.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-edit-program') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Program sukses di ubah.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-edit-grandp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Grand Program sukses di ubah.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Pagu minus',
                text: "Pagu Minus / Silahkan sesuaikan pagu.",
                showHideTransition: 'slide',
                icon: 'Info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: 'RED'
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
    <?php elseif ($this->session->flashdata('msg') == 'penyaluran-cek') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "data tidak dapat dihapus karena sudah terjadi transaksi penyaluran",
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
                text: " data Kegiatan Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'penyaluran-cek-komp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "data komponen tidak dapat dihapus karena sudah terjadi transaksi penyaluran",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus-komp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "data Komponen Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'penyaluran-cek-subp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "data sub program tidak dapat dihapus karena sudah terjadi transaksi penyaluran",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus-subp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "data sub program Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'penyaluran-cek-prog') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "data Program tidak dapat dihapus karena sudah terjadi transaksi penyaluran",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus-prog') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "data Program Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'penyaluran-cek-grandp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "data Grand Program tidak dapat dihapus karena sudah terjadi transaksi penyaluran",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>

    <?php elseif ($this->session->flashdata('msg') == 'success-hapus-grandp') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "data Grand Program Berhasil dihapus.",
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