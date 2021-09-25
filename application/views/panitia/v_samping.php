<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"> TAHUN  <?php $tahun = $this->session->userdata('tahun'); ?><?php echo "$tahun"; ?></li>
      <!-- Optionally, you can add icons to the links -->

     

     


      <li class="treeview">
        <a href="#"><i class="fa fa-child"></i> <span>Vaksin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         
          <li><a href="<?php echo base_url() . 'panitia/penyaluran' ?>"><i class="fa fa-chevron-right"></i>Skrining Vaksin</a></li>
        </ul>
      </li>
	   
     

      <li><a href="<?php echo base_url() . 'panitia/login/logout' ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>