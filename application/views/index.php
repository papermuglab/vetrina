<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/images/'); ?>favicon.png"/>   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vetrina | Home</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>slick.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style-responsive.css" rel="stylesheet">   
    <style>
 /* Tooltip */
   .tooltip > .tooltip-inner {
    /*background-color: #73AD21; 
    color: #FFFFFF; 
    border: 1px solid #c8c8c8; 
    padding: 5px;*/
    font-size: 16px;
  }
  /* Tooltip on top */
   .tooltip.top > .tooltip-arrow {
    /*background-color: #c8c8c8*/
    /*border-top: 5px solid #c8c8c8;*/
  }
  /* Tooltip on bottom */
  .tooltip.bottom > .tooltip-arrow {
    /*border-bottom: 5px solid blue;*/
  }
  /* Tooltip on left */
 .tooltip.left > .tooltip-arrow {
    /*border-left: 5px solid red;*/
  }
  /* Tooltip on right */
  .tooltip.right > .tooltip-arrow {
    /*border-right: 5px solid black;*/
  }
</style>
  </head>
  <body>
   <div class="container">
      <div class="header clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <a href=<?php echo base_url('home'); ?> class="logo"><img src="<?php echo base_url('assets/images/'); ?>vetrina-logo.jpg" alt="Vetrina Logo"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 iconSocial">
          <ul>
            <li><a href="https://www.facebook.com/VetrinaAnimalHealth" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/facebook.jpg"></a></li>
            <li><a href="https://twitter.com/mangesh1611?s=09" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/twitter.jpg"></a></li>
            <!-- <li><a href="javascript:void(0);" target="_black"><img src="<?php echo base_url('assets/images/'); ?>icons/linkedin.jpg"></a></li> -->
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
                <li><a href=<?php echo base_url('home'); ?> class="active">Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href=<?php echo base_url('product/cattle'); ?>>Cattle</a></li>
                      <li><a href=<?php echo base_url('product/poultry'); ?>>Poultry</a></li>
                      <li><a href=<?php echo base_url('product/companian_animal'); ?>>Companion Animals</a></li>
                      <li><a href=<?php echo base_url('product/exotic_animal'); ?>>Exotic Animals</a></li>
                      <li><a href=<?php echo base_url('product/swine'); ?>>Swine</a></li>
                      <li><a href=<?php echo base_url('product/sheep'); ?>>Goat/Sheep</a></li>
                    </ul>
                </li>
                <li><a href=<?php echo base_url('blogs'); ?>>Blogs</a></li>
                <li><a href=<?php echo base_url('career'); ?>>Career</a></li>
                <li><a href=<?php echo base_url('contact'); ?>>Contact Us</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
    </div>
      <div class="container-fluid">
        <div class="row">
          <div class="homeSlide">
            <div id="carousel-example-generic" class="carousel slide sliderHome" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="bannerSlide cattleBanner"></div>
                  <div class="carousel-caption">
                    <span>Cattle</span>
                  </div>
                </div>
                <div class="item">
                  <div class="bannerSlide poultryBanner"></div>
                  <div class="carousel-caption">
                    <span>Poultry</span>
                  </div>
                </div>
                <div class="item">
                  <div class="bannerSlide dogBanner"></div>
                  <div class="carousel-caption">
                    <span>Companian Animals</span>
                  </div>
                </div>
                <div class="item">
                  <div class="bannerSlide birdBanner"></div>
                  <div class="carousel-caption">
                    <span>Exotic Animals</span>
                  </div>
                </div>
                <div class="item">
                  <div class="bannerSlide pigBanner"></div>
                  <div class="carousel-caption">
                    <span>Swine</span>
                  </div>
                </div>
                <div class="item">
                  <div class="bannerSlide sheepBanner"></div>
                  <div class="carousel-caption">
                    <span>Sheep And Goats</span>
                  </div>
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
        <div class="container-fluid padding-top-30 padding-bottom-30 slogan_div">
          <div class="row">
            <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center"> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <h3>Generating Tomorrow's Solution Today...</h3>
              <h4 class="slogan"> 
                At <span class="company_name">Vetrina</span> we develop innovative, effective and economical solutions to overcome future challenges in animal health. 
              </h4>
            </div>
          </div>
        </div>
        <div class="container-fluid margin-top-30 margin-bottom-30" id="products">
          <h3 class="text-center">Our Products</h3>
          <ul class="mainProducts">
            <li>
              <a href=<?php echo base_url('product/cattle'); ?>><i class="productIcons cowIcon"></i></a>
              <div>Cattle</div>
            </li>
            <li>
              <a href=<?php echo base_url('product/sheep'); ?>><i class="productIcons sheepIcon"></i></a>
              <div>Sheep and Goats</div>
            </li>
            <li>
              <a href=<?php echo base_url('product/poultry'); ?>><i class="productIcons poultryIcon"></i></a>
              <div>Poultry</div>
            </li>
            <li>
              <a href=<?php echo base_url('product/companian_animal'); ?>><i class="productIcons dogIcon"></i></a>
              <div>Companian Animals</div>
            </li>
            <li>
              <a href=<?php echo base_url('product/exotic_animal'); ?>><i class="productIcons exoticIcon"></i></a>
              <div>Exotic Animals</div>
            </li>
            <li>
              <a href=<?php echo base_url('product/swine'); ?>><i class="productIcons pigIcon"></i></a>
              <div>Swine</div>
            </li>
          </ul>
          <!-- <ul class="mainProductsName">
            <li>Cattle</li>
            <li>Sheep and Goats</li>
            <li>Poultry</li>
            <li>Companian Animals</li>
            <li>Exotic Animals</li>
            <li>Swine</li>           
          </ul> -->
        </div>
        <div class="testimonial">
          <div class="container">          
            <div class="row">
              <h3 class="text-center">Testimonials</h3>
              <div class="testimonialSlider">
                <div class="testimonialItem">                  
                  <p>
                    I used Bestcalf in growing calves of age 4-8 months and got excellent growth. 
                    <br><br>
                    Calves reached sexual maturity earlier than usual and evelopment of the uterus was also complete owing to proper weight gain.
                    <br><br>
                    <span>-Yuvraj Padalkar, Sangrul, Kolhapur</span>
                  </p>
                </div>
                <div class="testimonialItem">
                  <p>
                    My heifer attained a body weight of 280-300 and a complete development of uterus while using Bovigro and Heifgro. It was possible to achieve first parturition within 2 years. In buffalo heifers, first parturition was achieved in 36 months. 
                    <br><br>
                    <span>-Sanjay Gurav, Rashivade, Kolhapur</span>
                  </p>
                </div>
                <div class="testimonialItem">
                  <img src="<?php echo base_url('assets/images/'); ?>testimonial/vetrinamarathitext.PNG">
                 <!--  <p>
                    My calf was given Bovigro for 3-3.5 months and superior growth was observed. The calf had a body weight of 120 kg at 3 months.   
                    <br><br>
                    <span>-Balasaheb Tambe, Pargaon,Pune</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
              <h3>Address:</h3> 
              1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, 411046<br />
              E-Mail: info@vetrinahealthcare.com<br />
              Website:www.vetrinahealthcare.com <br /><br />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
              <ul>
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href=<?php echo base_url('blogs'); ?>>Blogs</a></li>
                <li><a href=<?php echo base_url('career'); ?>>Career</a></li>
                <li><a href=<?php echo base_url('contact'); ?>>Contact</a></li>            
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="iconSocial">
                <ul>
                  <li><a href="https://www.facebook.com/VetrinaAnimalHealth" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/facebook.jpg"></a></li>
                  <li><a href="https://twitter.com/mangesh1611?s=09" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/twitter.jpg"></a></li>
                  <!-- <li><a href="javascript:void(0);" target="_black"><img src="<?php echo base_url('assets/images/'); ?>icons/linkedin.jpg"></a></li> -->
                  <li><a href="https://www.instagram.com/vetrinahealthcare/?hl=en" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/insta.jpg"></a></li>
                  <!-- <li><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/youtube.png"></a></li>  -->
                </ul>
              </div>
            </div>
          </div>
          <div id="copyright" class="row copyright">
            <div class="col-md-6">
              <p class="text-right"> Copyright &copy; 2019 </p> 
            </div>
            <div class="col-md-6">
              <p class="text-left"><span class="company_name"> Vetrina Healthcare Pvt. Ltd.</span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Search For the Product</h4>
            </div>
            <div class="modal-body">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <!-- <button class="btn btn-default" type="button">Search</button> -->
                  <a href="product/search.html" class="btn btn-default" type="button">Search</a>
                </span>
              </div><!-- /input-group -->
            </div>
          </div>
        </div>
      </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets/js/'); ?>slick.min.js"></script>
        <script src="<?php echo base_url('assets/js/'); ?>custom.js"></script>
        <script type="text/javascript">
          window.onscroll = function() {myFunction()};

          var header = document.getElementById("myHeader");
          console.log(header);
          var sticky = header.offsetTop;

          function myFunction() {
            // alert('');
            if (window.pageYOffset > sticky) {
              header.classList.add("sticky");
            } else {
              header.classList.remove("sticky");
            }
          }
          $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
          });
        </script>

      </body>
    </html>

    