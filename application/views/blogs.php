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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href=<?php echo base_url('product/cattle'); ?>>Cattle</a></li>
                      <li><a href=<?php echo base_url('product/poultry'); ?>>Poultry</a></li>
                      <li><a href=<?php echo base_url('product/companian_animal'); ?>>Companion Animal</a></li>
                      <li><a href=<?php echo base_url('product/exotic_animal'); ?>>Exotic Animals</a></li>
                      <li><a href=<?php echo base_url('product/swine'); ?>>Swine</a></li>
                      <li><a href=<?php echo base_url('product/sheep'); ?>>Goat/Sheep</a></li>
                    </ul>
                </li>
                <li><a href=<?php echo base_url('blogs'); ?> class="active">Blogs</a></li>
                <li><a href=<?php echo base_url('career'); ?>>Career</a></li>
                <li><a href=<?php echo base_url('contact'); ?>>Contact Us</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row w3-center w3-margin-top"><div class="col-md-12"><h1>Blogs</h1></div></div>
      <div class="row">
        <section class="featured-posts w3-margin-top">
          <div class="container">
            <!-- Post-->
            <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header">
                      <!-- <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html"> -->
                        <h3>Comming Soon!</h3>
                        <!-- <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a> -->
                    </header>
                   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center">
                      <a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="<?php echo base_url('assets/images/'); ?>blogs/avatar-1.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div>
                      </a>
                      <div class="date"><i class="glyphicon glyphicon-time"></i> 2 months ago</div>
                      <div class="comments"><i class="glyphicon glyphicon-comment"></i>12</div>
                    </footer> -->
                  </div>
                </div>
              </div>
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-1.jpeg" alt="..."></div>
            </div>
            <!-- Post        -->
            <!-- <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-2.jpeg" alt="..."></div>
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header">
                      <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                        <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center">
                      <a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="<?php echo base_url('assets/images/'); ?>blogs/avatar-2.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div>
                      </a>
                      <div class="date"><i class="glyphicon glyphicon-time"></i> 2 months ago</div>
                      <div class="comments"><i class="glyphicon glyphicon-comment"></i>12</div>
                    </footer>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Post  -->
            <!-- <div class="row d-flex align-items-stretch w3-margin-top">
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header">
                      <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="post.html">
                        <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar"><img src="<?php echo base_url('assets/images/'); ?>blogs/avatar-3.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><span>John Doe</span></div></a>
                      <div class="date"><i class="glyphicon glyphicon-time"></i> 2 months ago</div>
                      <div class="comments"><i class="glyphicon glyphicon-comment"></i>12</div>
                    </footer>
                  </div>
                </div>
              </div>
              <div class="image col-lg-5"><img src="<?php echo base_url('assets/images/'); ?>blogs/featured-pic-3.jpeg" alt="..."></div>
            </div> -->
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
              Website:www.vetrinahealthcare.com <br /><br />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
              <ul>
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
                <li><a href="index.html#products">Products</a></li>
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
        </script>
      </body>
    </html>
