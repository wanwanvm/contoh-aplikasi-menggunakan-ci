<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SAPA-SKO</title>
  <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/logosapa.png' ?>">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
  <!-- Simple Line Font -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
  <!-- Slider / Carousel -->
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'theme/jam/jquery.countdown.min.js' ?>"></script>
  <!-- Main CSS -->
  <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
  <?php
  function limit_words($string, $word_limit)
  {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
  }
  ?>
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
  $this->load->view('depan/atas_home');
  ?>
  <!--//END HEADER -->
  <!--============================= ABOUT =============================-->
  <section class="Kami Adalah">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2 class="style1">SAPA-SKO</h2>

          <font size="+6" color="#FF0000">
            <div id="getting-started"></div>
          </font>
          <script type="text/javascript">
            $("#getting-started")
              .countdown("2020/03/01", function(event) {
                $(this).text(
                  event.strftime('Pendaftaran Akan di buka : %D Hari %H:%M:%S Lagi')
                );
              });
          </script>

          <p class="style1"> Penerimaan atlet di SKO Ragunan telah di buka untuk periode 2020 untuk syarat bisa dilihat di Menu Persyaratan <a href="https://sapasko.id/persyaratan"> klik disini</a> dan panduan pengisian bisa di download <a href="https://sapasko.id/download"> Klik disini</a> serta anda bisa melakukan pendaftaran dengan <a HREF="HTTPS://sapasko.id/registrasi">klik disini</a> </p>
          <p class="style1">&nbsp;</p>
          <h2 class="style1">
            PERHATIAN! </h2>
          <p class="style1">

            SELAMA PROSES PENERIMAAN ATLET BARU BERLANGSUNG TIDAK DIPUNGUT BIAYA
            APAPUN!!! JIKA ADA YG MENGATAS NAMA KAN PANITIA UNTUK MEMBAYAR SEJUMLAH UANG UNTUK DITRANSFER ITU SUDAH PASTI PENIPUAN!!! SEGERA LAPORKAN KE PANITIA TERDEKAT
            ATAU DENGAN KLIK MENU <a href="https://sapasko.id/contact">HUBUNGI KAMI </a> </p>
        </div>
        <div class="col-md-5"> </div>
      </div>
    </div>
  </section>
  <!--//END ABOUT -->
  <!--============================= OUR COURSES =============================-->

  <!--//ISI UNTUK HALAMAN BERITA -->


  <!--//END OUR COURSES -->
  <!--============================= EVENTS =============================-->
  <section class="event">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="event-img2">
            <?php foreach ($pengumuman->result() as $row) : ?>
              <div class="row">
                <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                <div class="col-sm-9">
                  <h3><a href="<?php echo site_url('pengumuman'); ?>"><span class="style1"><?php echo $row->pengumuman_judul; ?></span></a></h3>
                  <span class="style1"><?php echo $row->tanggal; ?></span>
                  <p class="style1"><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                </div>
                <!-- // end .col-sm-7 -->
              </div><!-- // end .row -->
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--//END EVENTS -->
  <!--============================= DETAILED CHART =============================-->


  <!--//END DETAILED CHART -->
  <!--============================= FOOTER =============================--><?php
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
</body>

</html>