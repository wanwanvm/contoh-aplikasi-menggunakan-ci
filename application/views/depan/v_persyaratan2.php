<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Required meta tags -->

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
    .style3 {
      font-size: 14px
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
      <div class="row">
        <div class="col-md-7">
          <font size="+6" color="#FF0000">
            <div id="getting-started"></div>
          </font>
          <script type="text/javascript">
            $("#getting-started")
              .countdown("2020/03/01", function(event) {
                $(this).text(
                  event.strftime('Registrasi pendaftar Akan di buka : %D Hari %H:%M:%S Lagi')
                );
              });
          </script>
          <p><span style="font-family:arial,helvetica,sans-serif;"><strong><span class="style3">1. UNTUK MELIHAT SYARAT SECARA UMUM BISA DI LIHAT DI HALAMAN <a href="https://sapasko.id/persyaratan">KLIK DISINI</a> <br>
                  2. UNTUK MELIHAT CARA REGISTRASI DAN TATACARA REGISTRASI BISA<a href="https://sapasko.id/download/get_file/18"> DIDOWNLOAD DI SINI </a></span><br />
              </strong></span></p>

        </div>
        <div class="col-md-5">
          <img src="<?php echo base_url() . 'theme/images/logosapa.png' ?>" class="img-fluid" alt="#">
        </div>
      </div>
    </div>
  </section>
  <!--//END WELCOME TITLE -->
  <!--============================= TESTIMONIAL =============================-->

  <!--//END TESTIMONIAL -->
  <!--============================= DETAILED CHART =============================-->

  <!--//END DETAILED CHART -->

  <!--============================= FOOTER 
          =============================-->


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
</body>

</html>