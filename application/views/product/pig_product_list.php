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
    <link href="<?php echo base_url('assets/css/'); ?>w3.css" rel="stylesheet">
  <body>
    <div class="container" style="margin-bottom: 0px;">
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

    <div class="container w3-margin-top">        
      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=<?php echo base_url('home'); ?>>Home</a></li>
          <li class="breadcrumb-item"><a href="#" onclick="goBack()">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product List</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row w3-center w3-margin-top"><div class="col-md-12"><h1>Product List</h1></div></div>
      <div class="row">
        <section class="featured-posts w3-margin-top">
          <div class="container">             
            <div class="products-list col-md-12" id="products-list">
              <div class="row">
                <div class="item col-md-4">
                  <div class="product-image">
                    <a href="#"><img src="#" alt="Vetrilac SW"></a>
                  </div>
                  <div class="product-info">
                      <div class="header">
                        <h2 class="product-name">Vetrilac SW</h2><br>
                        <h3 class="product-tagline">A good start is vital in piglet </h3>
                        <h3 class="product-tagline">development to achieve </h3>
                        <h3 class="product-tagline">early market weight</h3>
                      </div>
                      <div class="desc std">
                        <b>Benefits</b>
                        <ul class="benefits">
                            <li>Improves piglet immunity</li>
                            <li>Controls mortality</li>
                            <li>Improves body weight gain</li> 
                            <li>Controls diarrhea</li> 
                        </ul><br>
                        <span class="hide more_info span1 " id="more_info">
                          <b>Feeding Instruction</b>
                          <ul class="feeding">
                              <li>150 g per liter of water, Mix thoroughly, </li>
                              <li>Feed 100 ml 3 to 5 times a day</li>
                          </ul><br>
                          <b> pakaging</b>
                          <ul class="packaging">
                              <li>Available as 5kg and 25kg pack</li>
                          </ul><br>
                        </span>
                        <div align="right">
                          <button id="" class="btn btn-primary kw1  ">know more..</button> 
                        </div>
                      </div>
                  </div>
                </div>                     
                <div class="item col-md-4">
                  <div class="product-image">
                    <a href="#"> <img src="#" alt="Vetrimix SW %"></a>
                  </div>
                  <div class="product-info">
                      <div class="header">
                        <h2 class="product-name">Vetrimix SW %</h2><br>
                        <h3 class="product-tagline"></h3>
                      </div>
                      <div class="desc std">
                        <b>Benefits</b>
                        <ul class="benefits">
                            <li>Supportive therapy in chronic dermatitis</li>
                            <li>Supportive therapy in chronic dermatitis</li>
                            <li>Reduced  trans-dermal water losss</li>                       
                        </ul><br>
                        <span class="hide more_info span2 " id="more_info">
                          <b>Feeding Instruction</b>
                          <ul class="feeding">
                              <li>Dog & Cat: 1 ml per 5 kg of body</li>
                              <li>weight per day or as suggested </li>
                              <li>by Veterinarian</li>
                          </ul><br>
                          <b> pakaging</b>
                          <ul class="packaging">
                              <li>Available in 100ml Bottle</li>
                          </ul><br> 
                        </span>
                        <div align="right">
                          <button id="" class="btn btn-primary kw1">know more..</button> 
                        </div>
                      </div>
                  </div>
                </div> 
                <div class="item col-md-4">
                  <div class="product-image">
                    <a href="#"> <img src="#" alt="Vetrimix Sow"></a>
                  </div>
                  <div class="product-info">
                      <div class="header">
                        <h2 class="product-name">Vetrimix Sow</h2><br>
                        <h3 class="product-tagline">Comprehensive support to nervous system</h3>
                      </div>
                      <div class="desc std">
                        <b>Benefits</b>
                        <ul class="benefits">
                            <li>Supportive therapy for cats & dogs exhibiting hyperactivity, aggressive behaviour and anxiety </li>
                            <li>Helps alleviate environmentally induced stress and travel stress</li>
                            <li>As an adjunct to epilepsy therapy</li>                       
                        </ul><br>
                        <span class="hide more_info span3 " id="more_info">
                          <b>Feeding Instruction</b>
                          <ul class="feeding">
                              <li>Dog & Cat:1 ml per 5 kg of body</li>
                              <li>weight per day or as suggested</li>
                              <li>by Veterinarian</li>
                          </ul><br>
                          <b> pakaging</b>
                          <ul class="packaging">
                              <li>Available in 100ml Bottle</li>
                          </ul><br> 
                        </span>
                        <div align="right">
                          <button class="btn btn-primary kw1">know more..</button> 
                        </div>
                      </div>
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
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
              <h3>Address:</h3> 
              1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, 411046<br />
              E-Mail: info@vetrinahealthcare.com<br />
              Website:www.vetrinahealthcare.com<br /><br />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
              <ul>
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
                <li><a href="../index.html#products">Products</a></li>
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
                  <!-- <li><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/youtube.png"></a></li> -->
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
                  <a href="search.html" class="btn btn-default" type="button">Search</a>
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

          const buttons = document.getElementsByTagName('button');
          const spans = document.getElementsByClassName('more_info');
          for(let i=0; i< buttons.length; i++){
            const button = buttons[i];
            const span = spans[i-1];
            button.addEventListener("click", function(){ 
              $(span).toggleClass('hide');
              // alert('button '+i+' Pressed');
            });
          }
        </script>
      </body>
    </html>