<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/images/'); ?>favicon.png"/>   
    <title>Vetrina | Home</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>slick.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style-responsive.css" rel="stylesheet">  
    <link href="<?php echo base_url('assets/css/'); ?>w3.css" rel="stylesheet"> 
  </head>
  <body>
   <div class="container">
      <div class="header clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <a href="<?php echo base_url('home'); ?>" class="logo"><img src="<?php echo base_url('assets/images/'); ?>vetrina-logo.jpg" alt="Vetrina Logo"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 iconSocial">
          <ul>
            <li><a href="https://www.facebook.com/VetrinaAnimalHealth" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/facebook.jpg"></a></li>
            <li><a href="https://twitter.com/mangesh1611?s=09" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/twitter.jpg"></a></li>
            <li><a href="https://www.linkedin.com/company/vetrina-healthcare-pvt-ltd" target="_black"><img src="<?php echo base_url('assets/images/'); ?>icons/linkedin.jpg"></a></li>
            <li><a href="https://www.instagram.com/vetrinahealthcare/?hl=en" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/insta.jpg"></a></li>
            <!-- <li><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/youtube.png"></a></li> -->
            
            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="myHeader">
      <div class="row">
        <nav class="navbar navbar-inverse">
          <div class="">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse text-center">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('home'); ?>" class="<?php if($menu == 'home'){echo 'active';}?>">Home</a></li>
                <li><a href="<?php echo base_url('about'); ?>" class="<?php if($menu == 'about'){echo 'active';}?>">About Us</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle <?php if($menu == 'products'){echo 'active';}?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('product/cattle'); ?>" class="<?php if(isset($menu1) && $menu1 == 'cattle'){echo 'active';}?>">Cattle</a></li>
                      <li><a href="<?php echo base_url('product/poultry'); ?>" class="<?php if(isset($menu1) && $menu1 == 'poultry'){echo 'active';}?>">Poultry</a></li>
                      <li><a href="<?php echo base_url('product/companian_animal'); ?>" class="<?php if(isset($menu1) && $menu1 == 'companian_animal'){echo 'active';}?>">Companion Animals</a></li>
                      <li><a href="<?php echo base_url('product/exotic_animal'); ?>" class="<?php if(isset($menu1) && $menu1 == 'exotic_animal'){echo 'active';}?>">Exotic Animals</a></li>
                      <li><a href="<?php echo base_url('product/swine'); ?>" class="<?php if(isset($menu1) && $menu1 == 'swine'){echo 'active';}?>">Swine</a></li>
                      <li><a href="<?php echo base_url('product/sheep'); ?>" class="<?php if(isset($menu1) && $menu1 == 'sheep'){echo 'active';}?>">Goat/Sheep</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('blogs'); ?>" class="<?php if($menu == 'blogs'){echo 'active';}?>">Blogs</a></li>
                <li><a href="<?php echo base_url('career'); ?>" class="<?php if($menu == 'career'){echo 'active';}?>">Career</a></li>
                <li><a href="<?php echo base_url('contact'); ?>" class="<?php if($menu == 'contact'){echo 'active';}?>">Contact Us</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
    </div>