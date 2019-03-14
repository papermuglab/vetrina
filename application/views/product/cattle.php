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
    <link href="<?php echo base_url('assets/css/'); ?>form.css" rel="stylesheet">
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
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                      <li><a href=<?php echo base_url('product/cattle'); ?> class="active">Cattle</a></li>
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

    <div class="container-fluid">
      <div class="row"> 
        <div class="container">      
          <div class="col-md-6">
            <div class="companianBanner">
              <img src="<?php echo base_url('assets/images/'); ?>products/cattle_product.jpg">
            </div>           
          </div>
          <div class="col-md-6">
            <p class="animal_info"> 
             In dairy animals, to get optimum production is a great challenge. Farmers keep high yielding animals with good genetics. But incorrect feeding practices deteriorate fertility and animal health which leads to culling and death of producing animals and farmers suffer from huge financial loss.  
            </p>            
          </div>
        </div>
      </div>
    </div><!-- /.container -->

  
     <section class="container-fluid"> 
      <div class="row"> 
          <!-- <div class="col-md-2"></div> -->
          <div class="col-md-4">
            <div class="product_item">
              <div class="item-title">
                <h3>Stage Nutrition</h3>
             </div>
             <div class="item-detail ">
              <p>For optimum productivity, fertility and health; stage nutrition plays a major role in nutritional management from calf to the cow & cow to the calf. All different growing and production stages have different nutritional requirements. Providing specific nutrients at specific stages with required quantity helps optimum performance..</p>
              <a href="<?php echo base_url('cattle/stage-nutrition'); ?>" class="w3-display-bottomright btn btn-primary">Products</a>
             </div>
           </div>
          </div>
          <div class="col-md-4">
            <div class="product_item">
              <div class="item-title">
                <h3>Clinical Nutrition</h3>
             </div>
             <div class="item-detail ">
              <p>You can trace every sickness, every diseases and every ailment to nutritional deficinecy. For faster recovery, specific nutritional strategy plays vital role to bring animal back to productivity and health.</p>
              <a href="<?php echo base_url('cattle/clinical-nutrition'); ?>" class="w3-display-bottomright btn btn-primary">Products</a>
             </div>
           </div>
          </div>
          <div class="col-md-4">
            <div class="product_item ">
              <div class="item-title">
                <h3>Bio-security</h3>
             </div>
             <div class="item-detail">
              <p>Environmental pathogens are major threat to dairy animal productivity. Diseases like FMD, Mastitis, Brucellosis and many more deteriorate animal health and farm productivity. Control of infectious organism on farm with bio-security and proper diagnostic tools to identify and control further damages to farm health can improve farm productivity.</p>
              <a href="<?php echo base_url('cattle/bio-security'); ?>" class="w3-display-bottomright btn btn-primary">Products</a>
            </div>
           </div>
          </div>
          <!-- <div class="col-md-2"></div> -->
      </div>
    </section><!-- /.container -->       
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
        <script src="<?php echo base_url('assets/js/'); ?>form.js"></script>
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
