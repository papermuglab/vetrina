<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
          <a href="Javascript:void(0);" class="logo"><img src="<?php echo base_url('assets/images/'); ?>vetrina-logo.jpg" alt="Vetrina Logo"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 iconSocial">
          <ul>
            <li><a href="https://www.facebook.com/VetrinaAnimalHealth">f</a></li>
            <li><a href="https://twitter.com/mangesh1611?s=09">t</a></li>
            <li><a href="javascript:void(0);">n</a></li>
            <li><a href="https://www.instagram.com/vetrinahealthcare/?hl=en">l</a></li>
            <li><a href="javascript:void(0);">y</a></li>
            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- NAV BAR-->
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
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href=<?php echo base_url('product/cattle'); ?>>Cattle</a></li>
                      <li><a href=<?php echo base_url('product/poultry'); ?>>Poultry</a></li>
                      <li><a href=<?php echo base_url('product/companian_animal'); ?>>Companion Animal</a></li>
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

    <div class="container-fluid w3-margin-top">        
      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=<?php echo base_url('home'); ?>>Home</a></li>
          <li class="breadcrumb-item"><a href="#" onclick="goBack()">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Prodict List</li>
        </ol>
      </nav>
    </div>
    <div class="container-fluid">

      <div class="row w3-center w3-margin-top"><div class="col-md-12"><h1>Product List</h1></div></div>
      <div class="row">
        <section class="featured-posts w3-margin-top">
          <div class="container">           
           <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-1.jpeg" alt="..."></div>
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header"> 
                      <div class="product_name">
                        <a href="#"><h2>Vetricare Cardiac</h2></a>
                      </div>
                    </header>
                    <div class="tag-line"><h4>"Comprehensive support to cardio-vascular system"</h4></div>
                    <div class="breif_info">
                       <ul>
                          <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
                          <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
                          <li>Supports cardiac health of geriatric dogs & cats</li>                       
                      </ul>
                    </div>
                     <button id="more" class="btn btn-primary w3-display-bottomright w3-margin-right w3-margin-bottom">know more..</button>  
                    <!-- <a href="product_details.html" class="btn btn-primary w3-right">View Details</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-3.jpeg" alt="..."></div>
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header"> 
                      <div class="product_name">
                        <a href="#"><h2>Vetricare Nervous</h2></a>
                      </div>
                    </header>
                    <div class="tag-line"><h4>"Comprehensive support to nervous system"</h4></div>
                    <div class="breif_info">
                      <ul>
                          <li>Supportive therapy for cats & dogs exhibiting hyperactivity, aggressive behaviour and anxiety </li>
                          <li>Helps alleviate environmentally induced stress and travel stress</li>
                          <li>As an adjunct to epilepsy therapy</li>                         
                      </ul>
                    </div>
                     <button id="more" class="btn btn-primary w3-display-bottomright w3-margin-right w3-margin-bottom">know more..</button>  
                    <!-- <a href="product_details.html" class="btn btn-primary w3-right">View Details</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-2.jpeg" alt="..."></div>
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header"> 
                      <div class="product_name">
                        <a href="#"><h2>Vetricare Urinary</h2></a>
                      </div>
                    </header>
                    <div class="tag-line"><h4>"Comprehensive support to urinary system"</h4></div>
                    <div class="breif_info">
                       <ul>
                          <li>Supportive therapy for maintaining optimal urinary tract health</li>
                          <li>Supportive therapy in treatment of  urolithiasis and preventing reoccurance of uroliths</li>
                          <li>Supportive therapy for breeds prone to recurrent urinary tract infections</li>
                      </ul>
                    </div>
                     <button id="more" class="btn btn-primary w3-display-bottomright w3-margin-right w3-margin-bottom">know more..</button>  
                    <!-- <a href="product_details.html" class="btn btn-primary w3-right">View Details</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div><!-- /.container -->
        
      <div class="footer">
        <div class="container">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
            <h3>Address:</h3> 
            1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, 411046<br />
            E-Mail: vetrina.media@gmail.com<br />
            Website:www.vetrinahealthcare.com 
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
            <ul>
              <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
              <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
              <li><a href="javascript:void(0);">Products</a></li>
              <li><a href=<?php echo base_url('blogs'); ?>>Blogs</a></li>
              <li><a href=<?php echo base_url('career'); ?>>Career</a></li>
              <li><a href=<?php echo base_url('contact'); ?>>Contact</a></li>              
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="iconSocial">
              <ul> 
                <li><a href="https://www.facebook.com/VetrinaAnimalHealth">f</a></li>
                <li><a href="https://twitter.com/mangesh1611?s=09">t</a></li>
                <li><a href="javascript:void(0);">n</a></li>
                <li><a href="https://www.instagram.com/vetrinahealthcare/?hl=en">l</a></li>
                <li><a href="javascript:void(0);">y</a></li>
                <!-- <li><a href="javascript:void(0);"></a></li> -->
              </ul>
            </div>
          </div>
          <div id="copyright" class="col-md-12 copyright">
            <p class="text-center"> Copyright &copy; 2019 Vetrina Healthcare Pvt. Ltd.</p>
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
                  <button class="btn btn-default" type="button">Search</button>
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

          function goBack() {
            window.history.back();
          }

        </script>
      </body>
    </html>
