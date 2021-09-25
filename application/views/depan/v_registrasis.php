<?php
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrasi Sapa-SKO</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/logo-dark.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap_datepicker/css/datepicker.css'); ?>" rel="stylesheet">



    <style type="text/css">
        <!--
        .style1 {
            font-family: Arial, Helvetica, sans-serif
        }
        -->
    </style>
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
    $this->load->view('depan/atas');
    ?>

    <!--//END HEADER -->
    <!--//END ABOUT IMAGE -->
    <!--============================= WELCOME TITLE =============================-->
    <section class="Kami Adalah">
        <div class="container">

            <?php echo form_open('registrasi/inputpeserta') ?>
            <?php echo validation_errors(); ?>
            <?php echo $this->session->flashdata('succses'); ?>
            <?php echo $this->session->flashdata('msg'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2 class="style1">Formulir Pendaftaran Atlet Baru</h2>
                    </div>
                </div>
            </div>

            <div class="style1">
                <label for="alamat">Cabang Olahraga:</label>
                <select name="cabor" id="kategori" class="form-control">
                    <option value="">-PILIH-</option>
                    <?php foreach ($data->result() as $row) : ?>
                        <option value="<?php echo $row->id_cabor; ?>">
                            <?php echo $row->nm_cabor; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="style1">
                <label for="kelas">Kelas: </label>
                <select name="kelas" class="kelas form-control">
                    <option value="">-PILIH-</option>
                </select>
            </div>
            <div class="form-group style1">
                <label for="nisn">NISN :</label>
                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nomor NISN">
            </div>
            <div class="form-group style1">
                <label for="nama">Nama Anda:</label>
                <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Lengkap Sesuai KK">
            </div>
            <div class="form-group style1">
                <label for="alamat">Alamat anda:</label>
                <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat Peserta">
            </div>
            <div class="form-group style1">
                <label for="email_peserta">Email:</label>
                <input type="text" class="form-control" id="email_peserta" name="email_peserta" placeholder="Email Yang Aktif">
            </div>
            <div class="style1">
                <label>Jenis Kelamin: </label>
                <select name="jns_kelamin" class="form-control">
                    <option value="Laki-Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group style1">
                <label for="Tempat">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Tempat Lahir Sesuai KK">
            </div>

            <span class="style1">
                <label for="tgl_lahir">Tanggal Lahir :</label>
            </span>
            <div class="input-group date style1" data-date-format="dd-mm-yyyy">
                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir Sesuai Akte Kelahiran">
                <?php // echo form_input('tanggal', date_to_id(2019-10-10), 'id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') 
                ?>
            </div>
            <div class="form-group style1">
                <label for="tinggi_badan">Tinggi Badan:</label>
                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan dalam CM (Centi Meter)">
            </div>

            <div class="form-group style1">
                <label for="berat_badan">Berat Badan:</label>
                <input type="text" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat Badan dalam KG (Kilo Gram)">
            </div>

            <div class="form-group style1">
                <label for="gol_darah">Golongan Darah:</label>
                <input type="text" class="form-control" name="gol_darah" placeholder="Golongan Darah">
            </div>
            <div class="form-group style1">
                <label for="agama">Agama:</label>
                <input type="text" class="form-control" name="agama" placeholder="Agama">
            </div>

            <div class="form-group style1">
                <label for="hp">No Handphone:</label>
                <input type="text" class="form-control" name="hp" placeholder="Nomor Handphone">
            </div>


            <div class="form-group style1">
                <label for="nama_bapak">Nama Ayah:</label>
                <input type="text" class="form-control" name="nama_bapak" placeholder="Nama Ayah">
            </div>

            <div class="form-group style1">
                <label for="tinggi_bapak">Tinggi Ayah:</label>
                <input type="text" class="form-control" name="tinggi_bapak" placeholder="Tinggi Ayah dalam CM (centi Meter)">
            </div>

            <div class="form-group style1">
                <label for="nama_ibu">Nama Ibu Kandung:</label>
                <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu Kandung">
            </div>

            <div class="form-group style1">
                <label for="tinggi_ibu">Tinggi Ibu:</label>
                <input type="text" class="form-control" name="tinggi_ibu" placeholder="Tinggi IBU dalam CM (centi Meter)">
            </div>
            <div class="form-group style1">
                <label for="jml_saudara">Jumlah Saudara Kandung:</label>
                <input type="text" class="form-control" id="jml_saudara" name="jml_saudara" placeholder="Jumlah Saudara Kandung">
            </div>
            <div class="form-group style1">
                <label for="hobby">Hobby:</label>
                <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Hobby Peserta">
            </div>
            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Berkas Scan</label>
                <div class="col-sm-7">
                    <input type="file" name="filefoto" required /> Gambar dalam bentuk file jpg/jpeg ukuran 500 x 400 pixel
                </div>
            </div>



            <span class="style1">
                <input type="submit" name="" value="Daftar" class="btn btn-default">
                <?php echo form_close() ?></span>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= DETAILED CHART =============================-->

    <!--//END DETAILED CHART -->

    <!--============================= FOOTER =============================-->

    <?php
    $this->load->view('depan/bawah');
    ?>

    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->



    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap_datepicker/js/bootstrap-datepicker.js' ?>"></script>


    <script type="text/javascript">
        //membuat data posisi
        $(document).ready(function() {
            $('#kategori').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/registrasi/get_posisi",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id_psb + '>' + data[i].nm_posisi + '</option>';
                        }
                        $('.kelas').html(html);

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
        $('#tgl_lahir').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true,
            startView: 'decade'
        });
    </script>

</body>

</html>