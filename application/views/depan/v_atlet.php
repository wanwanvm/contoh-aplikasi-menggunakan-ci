<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atlet</title>
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
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span> 021 5703943
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>infoskoragunan@gmail.com
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="50px;" src="<?php echo base_url() . 'theme/images/logo-dark.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Terkini</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('kami'); ?>">Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pelatih'); ?>">Pelatih</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('atlet'); ?>">Atlet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('psb'); ?>">Penerimaan Atlet </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('berita'); ?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download'); ?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Galeri</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--//END HEADER -->

    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Atlet Kami</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                            <?php if (empty($row->atlet_photo)) : ?>
                                <img src="<?php echo base_url() . 'assets/images/blank.png'; ?>" class="img-fluid" alt="#">
                            <?php else : ?>
                                <img src="<?php echo base_url() . 'assets/images/' . $row->atlet_photo; ?>" class="img-fluid" alt="#">
                            <?php endif; ?>
                            <p class="text-center mt-3"><span>
                                    Nama : <?php echo $row->atlet_nama; ?></span>
                                <br>
                                Kelas : <?php echo $row->kelas_nama; ?>
                                <br>
                                Cabang Olahraga : <?php echo $row->cabor_nama; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End row -->
            <nav><?php echo $page; ?></nav>
        </div>
    </section>

    <!--//End Style 2 -->
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