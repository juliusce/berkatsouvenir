<!DOCTYPE html>
<html lang="en">
<head>
    <title>Berkat Souvenir | <?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="format-detection" content = "telephone=no" />
    <meta name="title" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/bootstrap.css" >
    <link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/camera.css">

		<script src="<?=base_url()?>includes/frontend/js/jquery.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/superfish.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery.mobilemenu.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery.easing.1.3.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery.ui.totop.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery.touchSwipe.min.js"></script>
    <script src="<?=base_url()?>includes/frontend/js/jquery.equalheights.js"></script>

    <script src='<?=base_url()?>includes/frontend/js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?=base_url()?>includes/frontend/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->

    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script>
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->

<header id="header" style="position:relative">
      <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img style="margin-bottom:-1%" alt="Grill point" src="<?=base_url()?>includes/logo.png"></a></h1>
      </div>
        <img id="imageTest" src="<?=base_url()?>includes/renda.png" style="    max-width: 6163px;
    max-height: 100%;
    bottom: 0;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 96%;
    z-index:30" />
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu" style="list-style-type: none;">
                  <li <?php if($title == 'Home'){?>class="active"<?php } ?>><a href="<?=base_url()?>">home</a></li>
                  <li <?php if($title == 'Product'){?>class="active"<?php } ?>><a href="<?=base_url()?>category">product</a></li>
                  <li <?php if($title == 'Article'){?>class="active"<?php } ?>><a href="<?=base_url()?>article">articles</a></li>
                  <li <?php if($title == 'Testimonial'){?>class="active"<?php } ?>><a href="<?=base_url()?>testimonial">testimonials</a></li>
                  <li <?php if($title == 'Contact'){?>class="active"<?php } ?>><a href="<?=base_url()?>contact">contact</a></li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<?php $this->load->view($body); ?>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="<?=base_url()?>includes/frontend/img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="<?=base_url()?>includes/frontend/img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="<?=base_url()?>includes/frontend/img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="<?=base_url()?>includes/frontend/img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="index.html"><img src="<?=base_url()?>includes/logofooter.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; <?=date('Y')?> &bull; Copyright Berkat Souvenir <br/> Created By : Julius Cesario</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?=base_url()?>includes/frontend/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>includes/frontend/js/tm-scripts.js"></script>
</body>
</html>
