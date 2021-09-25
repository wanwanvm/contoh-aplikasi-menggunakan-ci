<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kami</title>
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

</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
    $this->load->view('depan/atas');
    ?>
    <!--//END HEADER -->
    <!--//END ABOUT IMAGE -->
    <!--============================= WELCOME TITLE =============================-->


    <center>
        <p><span style="color:#FF0000;">DATA YANG ANDA MASUKAN SUKSES </span></p>

        <p><span style="color:#0000FF;">SILAHKAN CATAT ALAMAT EMAIL DAN PASSWORD ANDA UNTUK MELAKUKAN LOGIN KE HALAMAN PESERTA</span></p>

        <table border="1" cellpadding="1" cellspacing="1" height="124" width="555">
            <tbody>
                <tr>
                    <td width="121">NISN</td>
                    <td width="8">:</td>
                    <td width="408"><?php echo "$nisn"; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo "$email_peserta"; ?></td>
                </tr>
                <tr>
                    <td>Nama Peserta</td>
                    <td>:</td>
                    <td><?php echo "$nama_peserta"; ?></td>
                </tr>
                <tr>
                    <td>Password Anda</td>
                    <td>:</td>
                    <td><?php echo "$sandi"; ?></td>
                </tr>
            </tbody>
        </table>

        <p>SILAHKAN LOGIN KE HALAMAN PESERTA UNTUK MELIHAT PENGUMUMAN DAN MENCETAK KARTU PESERTA</p>

        <p>SILAHKAN <strong><a href="https://sapasko.id/adminpeserta"><span style="color:#FF0000;">KLIK DISINI </span></a></strong>UNTUK MASUK KE HALAMAN PESERTA</p>
    </center>

    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->

    <!--//END TESTIMONIAL -->
    <!--============================= DETAILED CHART =============================-->

    <!--//END DETAILED CHART -->

    <!--============================= FOOTER =============================-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url() . 'theme/images/log_kemenpora.png' ?>" width="100px;" class="img-fluid" alt="footer_logo">
                        </a>
                        <p><?php echo date('Y'); ?> © copyright by <a href="" target="_blank"> </a>M1<br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Sajian Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Terkini</a></li>
                            <li><a href="<?php echo site_url('about'); ?>">Kami</a></li>
                            <li><a href="<?php echo site_url('berita'); ?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Galeri</a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Pembinaan</h3>
                        <ul>
                            <li><a href="<?php echo site_url('pelatih'); ?>">Pelatih</a></li>
                            <li><a href="<?php echo site_url('atlet'); ?>">Atlet </a></li>
                            <li><a href="<?php echo site_url('psb'); ?>">Penerimaan Atlet </a></li>
                            <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                            <li><a href="<?php echo site_url('download'); ?>">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Asisten Deputi Pembinaan Pengelolaan Sentra dan SKO, Gedung PPITKON Lt2, Kementerian Pemuda dan Olahraga, Jalan Gerbang Pemuda No 3 Senayan Jakarta. Indonesia </p>
                        <p>Email : infoskoragunan@gmail.com
                            <br> Phone : 021 5703943 </p>
                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </footer>

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
</body>

</html>