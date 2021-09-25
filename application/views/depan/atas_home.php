<style type="text/css">
    <!--
    .style1 {
        font-family: Arial, Helvetica, sans-serif
    }
    -->
</style>
<div class="header-topbar">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-8 col-md-9">
                <div class="header-top_address">
                    <div class="header-top_list">
                        <span class="icon-phone"></span> 021 5703943
                    </div>
                    <div class="header-top_list">
                        <span class="icon-envelope-open"></span>sapasko@gmail.com
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
                    <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="50px;" src="<?php echo base_url() . 'theme/images/logosapa.png' ?>"></a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <span class="style1"><a class="nav-link" href="<?php echo site_url(''); ?>">Home</a> </span></li>
                            <li class="nav-item style1">
                                <a class="nav-link" href="<?php echo site_url('registrasi'); ?>">Pendaftaran Atlet Baru </a> </li>
                            <li class="nav-item style1">
                                <a class="nav-link" href="<?php echo site_url('adminpeserta'); ?>">Login Peserta </a> </li>
                            <li class="nav-item style1">
                                <a class="nav-link" href="<?php echo site_url('persyaratan'); ?>">Persyaratan</a> </li>
                            <li class="nav-item style1">
                                <a class="nav-link" href="<?php echo site_url('download'); ?>">Download</a> </li>


                            <li class="nav-item">
                                <span class="style1"><a class="nav-link" href="<?php echo site_url('contact'); ?>">Hubungi Kami</a></span> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/Gambar Atas 3X.jpg' ?>" alt="First slide">
                    <div class="carousel-caption d-md-block"> </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/Gambar Atas 2.png' ?>" alt="Second slide">
                    <div class="carousel-caption d-md-block"> </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/images/Gambar Atas 1.jpg' ?>" alt="Third slide">
                    <div class="carousel-caption d-md-block"> </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="sr-only style1">Previous</span> </a>
            <span class="style1"><a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> Next </a></span>
        </div>
    </div>
</section>