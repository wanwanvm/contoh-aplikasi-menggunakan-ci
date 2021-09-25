<!--Counter Inbox-->

<header class="main-header">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!-- Logo -->
  <a href="<?php echo base_url() . 'panitia/dashboard' ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">VAKSIN</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">VAKSIN</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->


        <?php
        $kdadmin = $this->session->userdata('kdadmin');
        $q = $this->db->query("SELECT * FROM tb_admin WHERE kdadmin='$kdadmin'");
        $c = $q->row_array();
        ?>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url() . 'theme/images/kwitansi/log_kemenpora.png' ?>" class="user-image" alt="">
            <span class="hidden-xs"> <?php echo $c['nama']; ?> </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url() . 'theme/images/kwitansi/log_kemenpora.png' ?>" class="img-circle" alt="">

              <p>
                <?php echo $c['nama']; ?><?php $tahun = $this->session->userdata('tahun'); ?><br> T.A.<?php echo "$tahun"; ?>


              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="<?php echo base_url() . 'panitia/login/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
        </li>
      </ul>
    </div>

  </nav>
</header>