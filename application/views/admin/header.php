<?php $udata = $this->session->userdata('user_data');?>
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>SV</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">BERKAT SOUVENIR</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><i class="fa fa-power-off"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?=base_url()?>includes/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
              <p>
                <a href="<?=base_url()?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
              </p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url()?>includes/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $udata['nama']; ?></p>
      </div>
    </div>
    <?php $bc = $this->session->userdata('breadcrumb'); ?>
    <?php $msbc = $this->session->userdata('main_sub_breadcrumb'); ?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="<?php if($bc == 'dashboard'){?>active<?php }?>">
        <a href="<?= base_url()?>dashboard">
          <i class="fa fa-laptop"></i>
          <span>DASHBOARD</span>
        </a>
      </li>

      <!-- SLIDER MANAGEMENT -->
      <li class="<?php if(!empty($bc)&&$bc == 'manajemen_slider'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-edit"></i> HOME SLIDER<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'tambah_slider'){?>active<?php }?>"><a href="<?= base_url()?>admin/slider/insert"><i class="fa fa-plus-square "></i> BUAT SLIDER</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_slider'){?>active<?php }?>"><a href="<?= base_url()?>admin/slider"><i class="fa fa-list"></i> DAFTAR SLIDER</a></li>
        </ul>
      </li>


      <!-- PRODUCT MANAGEMENT -->
      <li class="<?php if(!empty($bc)&&$bc == 'manajemen_product'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-user"></i> MANAJEMEN PRODUK<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'category'){?>active<?php }?>">
            <a><i class="fa fa-user"></i> CATEGORY</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Admin/Category"><i class="fa  fa-list "></i> DAFTAR CATEGORY</a></li>
              <li><a href="<?= base_url()?>Admin/Category/Tambah"><i class="fa fa-plus-square"></i> TAMBAH CATEGORY</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'product'){?>active<?php }?>">
            <a><i class="fa fa-user"></i> PRODUCT</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Admin/Product"><i class="fa  fa-list "></i> DAFTAR PRODUCT</a></li>
              <li><a href="<?= base_url()?>Admin/Product/Tambah"><i class="fa fa-plus-square"></i> TAMBAH PRODUCT</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- TESTIMONIALS MANAGEMENT -->
      <li class="<?php if(!empty($bc)&&$bc == 'testimonial'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-edit"></i> MANEJEMEN TESTIMONIAL<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_testimonial'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Testimonial"><i class="fa fa-list"></i> DAFTAR TESTIMONIAL</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'tambah_testimonial'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Testimonial/Tambah"><i class="fa fa-plus-square "></i> BUAT TESTIMONIAL</a></li>
        </ul>
      </li>

      <!-- ARTICLES MANAGEMENT -->
      <li class="<?php if(!empty($bc)&&$bc == 'article'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-edit"></i> MANEJEMEN ARTICLE<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_article'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Article"><i class="fa fa-list"></i> DAFTAR ARTICLE</a></li>
            <li class="<?php if(!empty($msbc)&&$msbc == 'tambah_article'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Article/Tambah"><i class="fa fa-plus-square "></i> BUAT ARTICLE</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
