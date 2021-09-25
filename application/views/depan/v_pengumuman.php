<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengumuman</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/fullcalendar.min.css' ?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
    $this->load->view('depan/atas_home');
    ?>

    <!--//END HEADER -->
    <!--============================= EVENTS =============================-->
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Pengumuman Terbaru </a>
                        </li>

                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <?php foreach ($data->result() as $row) : ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="event-date">
                                            <h4><?php echo date("d", strtotime($row->pengumuman_tanggal)); ?></h4> <span><?php echo date("M Y", strtotime($row->pengumuman_tanggal)); ?></span>
                                        </div>
                                        <span class="event-time"><?php echo date("H:i", strtotime($row->pengumuman_tanggal)) . ' WIB'; ?></span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="event-heading">
                                            <h3><?php echo $row->pengumuman_judul; ?></h3>
                                            <p><?php echo $row->pengumuman_deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="event-underline">
                            </div>
                        <?php endforeach; ?>

                        <div class="col-md-12 text-center">
                            <?php echo $page; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
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
    <script src="<?php echo base_url() . 'theme/js/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/fullcalendar.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>