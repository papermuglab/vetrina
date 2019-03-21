<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/images/'); ?>favicon.png"/>
     <!-- <link href="//db.onlinewebfonts.com/c/c632fa0216eed0c3ee8384ffb53b9f5e?family=Cooper" rel="stylesheet" type="text/css"/> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vetrina | About Us</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/'); ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>slick.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?> class="active">About Us</a></li>                
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
    <div class="container clearfix margin-top-30 margin-bottom-30 text-center">
      <!-- Nav tabs -->
      <ul class="nav nav-pills mainTab" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
          <i class="glyphicon glyphicon-question-sign"></i> About <span class="company_name">Vetrina</span></a></li>
        <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Directors</a></li>
        <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-screenshot"></i> Mission-Vision </a></li>
        <li role="presentation" class=""><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-ok-sign"></i> Quality Policy</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content text-left  margin-top-30">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="col-md-12">
            <!-- <h3>About VETRINA </h3> -->
            <p><span class="company_name">Vetrina Healthcare</span> is an innovation-driven animal nutrition and health care company in India. We develop innovative customized solutions for optimum health and productivity of animals.
            </p>
            <p>Established in 2012 and now catering to the needs of livestock, companion and exotic animals, <span class="company_name">Vetrina Healthcare</span> is a team of veterinary experts, nutritionists, technical consultants, researchers and functional staff. Founded by a veterinarian, run by experts in animal science and devoted to the service of animal farmers, veterinarians and pet parents, we are an animal healthcare company in its truest sense.  
            </p>
            <p>Our culture is driven by relentless pursuit of the highest standards of integrity, accountability, professionalism, excellence and quality. Innovation and customer satisfaction are the benchmarks by which our success is measured.</p>
            <p>Ensuring health and productivity of livestock and companion animals is our first priority. We support veterinarians and livestock farmers by offering nutritional solutions for wellbeing of animals.</p>

            <h3 class="w3-left">Why <span class="company_name">Vetrina</span> Products?</h3>
            <p>We give what we say: Right from selection of raw material to product formulations under strict specifications to the final link in our supply chain, at each of these stages in our business process, we ensure strict adherence to stringent quality standards. And loopholes, well we have zero tolerance for them. </p>
            <p>All our products are manufactured under strict control and highly sophisticated manufacturing facility that exceeds the requirement of customers. </p>
            <p>Our technical team ensures every time that all our products are delivered with constant quality. We strictly follow Quality Management System (QMS) standards.</p>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo base_url('assets/images/'); ?>DR.MANGESH.jpeg" alt="DR.MANGESH GHADIGAONKAR" class="img-responsive">
            </div>
            <div class="col-md-9">
              <h4>Dr. Mangesh Ghadigaonkar <br><small>Founder & Managing Director</small>
              <a href="https://www.linkedin.com/in/dr-mangesh-ghadigaonkar-7422a645" target="_blank" class="profileIcon">n</a></h4>  
              <p>
                Dr. Mangesh Ghadigaonkar is a highly skilled business development professional holding a Bachelor’s degree in veterinary science from Bombay Veterinary College.
                His technical expertise in dairy nutrition and product development skills in ruminants has helped him to position <span class="company_name">Vetrina Healthcare Pvt. Ltd.</span>, as an innovation driven company.
                He is recognized for managing multiple projects in corporate marketing in both domestic and international scenario with a solid training reputation in the field of livestock nutrition.
                He has a proven ability to assess and manage demanding environments, providing decisive team leadership with a track record of motivating staff to acquire performance skills.</p>
                <p class="hide " id="k_w1">
                  Since he began his journey from a simple farming background, he has creatively acquired a solid understanding of farmers’ wants and needs and has abilities to analyze this information into brand communications.<br><br>                 
                  
                  He is very adept at building strong relationships across cultures and has developed specialties in strategic planning in global marketing and brand establishments.<br><br>
                  
                  With a sharp focus on quality and performance and having useful commercial intellect, Dr Ghadigaonkar has a vision to achieve growth through innovation in the fast-changing animal health industry.
                </p>                
              <button id="kw1" class="btn btn-primary">know more..</button>              
            </div>
          </div>
          
          <div class="row margin-top-30">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo base_url('assets/images/'); ?>DR.SANTOSH-PANSARE.png" alt="DR.SANTOSH PANSARE" class="img-responsive">
            </div>
            <div class="col-md-9">
              <h4>Dr. Santosh Pansare <br><small>Director</small>
               <a href="https://www.linkedin.com/in/santosh-pansare-58bb18159" class="profileIcon" target="_blank">n</a></h4>
              <p>
                Dr. Santosh Pansare serves as Director of <span class="company_name">Vetrina Healthcare Pvt. Ltd.</span>. He has earned his both bachelors and masters degrees from Bombay veterinary College. He has obtained his MBA degree from USA. His initial working with Royal Canin and Pedigree has gained considerable experience in companion animal nutrition. His in-depth understanding of companion animal health industry in India has encouraged him to start dedicated companion animal division in company with innovative science based nutritional solutions for pet’s needs. He also has active involvement in production, product development, marketing strategies, capacity expansion and up gradation of facilities to international standards.
              </p>
             
              <!-- <div id="kw2" class="btn btn-primary">konw more..</div> -->
            </div>
          </div>

          <div class="row margin-top-30">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo base_url('assets/images/'); ?>MR.SRIKRISHNA-GANGURDE.png" alt="MR.SRIKRISHNA GANGURDE" class="img-responsive">
            </div>
            <div class="col-md-9">
              <h4>Mr. Srikrishna Gangurde <br><small>Director</small></h4>
               <!-- <a href="https://www.linkedin.com/in/santosh-pansare-58bb18159" class="profileIcon">n</a> -->
              <p>
              As a post graduate of agricultural university, Mr. Shrikrishna Gangurde has started his career by joining his family run business of Fruit and Vegetable farming. In the year 1999, he started his first broiler farm. His keen interest in poultry farming integration prompted him to start his own hatchery operations. He has invested in grain facilities, feed mill which allowed his flagship firm, Avee Broilers to expand into poultry business and making its turnover close to INR 300 crores. He is guiding Avee Broilers by holding fast to the traditional values and the use of modern day technology. His commitment towards environment persuaded him to build solar hot water system for hatchery, thus making it only of a kind in India. His leadership and vision have been exemplary and are truly role model for budding entrepreneurs. Currently, he is serving on various Directorial boards in agricultural related industries.He has joined <span class="company_name">Vetrina Healthcare</span> as a Director in year 2017. His business acumen, entrepreneurial zeal, organizational skills, leadership abilities and passion about sustainability will help Vetrina to maintain high standards and to grow leaps and bounds and spread wings across the globe.

              </p>
              <!-- <div id="kw3" class="btn btn-primary">konw more..</div> -->
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
          <div class="container">
            <div class="col-lg-6 col-md-6">
              <div class="visionStatement">
                <h3>Mission</h3>
                <p>To serve all livestock farmers and pet parents with innovative nutritional and healthcare products for optimized lifetime performance and wellbeing of their animals. </p>
              </div>
              <div class="missionStatement">
                <h3>Vision</h3>
                <p>To be a leading solution provider company in animal nutrition and health through comprehensive range of products and service</p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="valueStatement">
                <h3>Values</h3>
                <ol>
                  <li>
                    <strong class="brand-text-color">Customer:</strong> Our customers are our valuable partners who accompany us on our mission to develop best set of practices for animal health and wellbeing. We forge partnerships with them and strive to exceed expectations through our products and services. 
                  </li>
                  <li>
                    <strong class="brand-text-color">Product:</strong> The true value of our products to our customer is not determined by what we put into it, but by what they get out of it.
                  </li>
                  <li>
                    <strong class="brand-text-color">Quality:</strong> Our quality comes from deep understanding of customer’s need and technical capabilities of our experts to formulate innovative, effective and economical solution for productivity, performance and wellbeing of animals. 
                  </li>
                  <li>
                    <strong class="brand-text-color">Service:</strong> Each of our customers receives individual attention irrespective of magnitude of the business they give us. We invariably always provide high quality products and value-added services to every customer who believes in us.
                  </li>
                  <li> 
                    <strong class="brand-text-color">People:</strong> We maintain safe and healthy work environment for all our employees and strive to provide fair working conditions, which inspire every individual to imbibe sprit of entrepreneurship and ownership in the organization.
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
          <!-- <h2 class="text-center">Quality Policy</h2> -->
          <!-- <div class="quotesOne"></div> -->
            <!-- <div class="policy"> -->
              <p>
                <span class="company_name">Vetrina Healthcare</span> recognizes quality as an essential element that helps to serve livestock farmers to achieve better Productivity by optimizing lifetime performance and well-being of animal.
                <ol>
                  <li>Our customers are our valuable partners who accompany us on our mission to develop best set of practices for livestock farming. Their needs and expectations are the driving force behind <span class="company_name">Vetrina Healthcare</span>’s business, and we must meet them in order to succeed.  <br><br></li>
                  <li>Vetrina is committed to thoroughly adhere to all applicable laws and legislations required for successful running of business <br><br></li>
                  <li>Right from the selection of raw material to product formulation under strict specification to final link in our supply chain, at each of the stages in our business processes, we ensure strict adherence to stringent quality standards with zero tolerance to errors. <br><br></li>
                  <li>Our techno-functional team members are well honed to provide the best. They accept the challenge to satisfy the customers with integrity and honoring the commitment. <br><br></li>
                  <li>Our commitment to quality products, services will ensure the best health for people, animals, and an environment. <br><br></li>
                </ol>
              </p>
              <p class="text-right">
                Dr. Mangesh Ghadigaonkar <br>
                Managing Director
              </p>
            <!-- </div> -->
          <!-- <div class="quotesTwo"></div> -->
        </div>
      </div>
    </div>
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
              <h3>Address:</h3> 
              1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, Pune-411046, <br />Maharashtra, India<br />
              E-Mail: info@vetrinahealthcare.com<br />
              Website:www.vetrinahealthcare.com <br /><br />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
              <ul>
                <li><a href=<?php echo base_url('home'); ?>>Home</a></li>
                <li><a href=<?php echo base_url('about'); ?>>About Us</a></li>
                <li><a href="<?php echo base_url('home'); ?>#products">Products</a></li>
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
              <input type="text" class="form-control" name="search_val" placeholder="Search for...">
              <span class="input-group-btn">
                <!-- <button class="btn btn-default" type="button">Search</button> -->
                <a href="#" class="btn btn-default input" type="button">Search</a>
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
        $('#kw1').click(function(){
          // alert('kw');
          $('#k_w1').toggleClass('hide');
        });
        
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
