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
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/<?php echo base_url('assets/css/'); ?>font-awesome.min.css">
    <style type="text/css">
    	    	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		 /* unvisited link */
		.behclick-panel a:link {
		    text-decoration:none;
		}

		/* visited link */
		.behclick-panel a:visited {
		    text-decoration:none;
		}

		/* mouse over link */
		.behclick-panel a:hover {
		    text-decoration:none;
		}

		/* selected link */
		.behclick-panel a:active {
		    text-decoration:none;
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
    <!-- NAV BAR-->
    <div class="container-fluid" id="myHeader">
      <div class="row">
        <nav class="navbar navbar-inverse">
          <div class="container">
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
    
    <div class="container">
    	<div class="row w3-center w3-margin-top"><div class="col-md-12"><h1>Product List</h1></div></div>
	    <div class="row products-list">
	     <span class="col-md-12">
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    <a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                </div>
							<!-- <ul class="list-group">
								<li class="list-group-item">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="">
											0 - 1000$
										</label>
									</div>
								</li>
								<li class="list-group-item">
									<div class="checkbox" >
										<label>
											<input type="checkbox" value="">
											1000$ - 2000$
										</label>
									</div>
								</li>
								<li class="list-group-item">
									<div class="checkbox"  >
										<label>
											<input type="checkbox" value="">
											2000$ - 6000$
										</label>
									</div>
								</li>
								<li class="list-group-item">
									<div class="checkbox"  >
										<label>
											<input type="checkbox" value="">
											More Than 6000$
										</label>
									</div>
								</li>
							</ul> -->
						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    <a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                </div>
							
						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    <a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                </div>
							
						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
		</span>
		<span class="col-md-12">
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    <a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                </div>

						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    <a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                </div>							
						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4">
				<div id="accordion" class="panel panel-primary behclick-panel">
					<div class="panel-heading">
						<h3 class="panel-title">Vetricare Cardiac</h3>
					</div>
					<div class="panel-body" >
						<div class="panel-heading" >
							<h3 class="product-tagline">Comprehensive support to cardio-vascular system </h3>							
						</div>						
						<div id="collapse0" class="panel-collapse collapse in" >
							<div class="product-image" style="height: 250px;">
		                    	<a href="#"> <img src="#" alt="Vetricare Cardiac"></a>
		                	</div>							
						</div>

						<div class="panel-heading " >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1">
									<i class="indicator fa fa-caret-right" aria-hidden="true"></i> Benefits
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" >
							<ul class="">
	                            <li>Supportive therapy for maintaining healthy heart functions in breeds predisposed to cardiovascular disorders</li>
	                            <li>Provides comprehensive cardiovascular support by improving blood flow, blood vessel integrity and circulation</li>
	                            <li>Supports cardiac health of geriatric dogs & cats</li> 
	                        </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Feeding Instruction</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="">
                              <li>Dog & Cat: 1 ml per 5 kg of Body weight per day</li>
                              <li>or as suggested by Veterinarian </li>
                          </ul>
						</div>
						<div class="panel-heading" >
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i>Pakaging</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="">
                              <li>Available in 100ml Bottle</li>
                          </ul>
						</div>
					</div>
				</div>
			</div>
		</span>
		</div>
	</div>

<br><br>
	<div class="footer">
        <div class="container">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
            <h3>Address:</h3> 
            1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, 411046<br />
            E-Mail: info@vetrinahealthcare.com<br />
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
                <li><a href="https://www.facebook.com/VetrinaAnimalHealth" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/facebook.jpg"></a></li>
                <li><a href="https://twitter.com/mangesh1611?s=09" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/twitter.jpg"></a></li>
                <!-- <li><a href="javascript:void(0);" target="_black"><img src="<?php echo base_url('assets/images/'); ?>icons/linkedin.jpg"></a></li> -->
                <li><a href="https://www.instagram.com/vetrinahealthcare/?hl=en" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/insta.jpg"></a></li>
                <!-- <li><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url('assets/images/'); ?>icons/youtube.png"></a></li>  -->
              </ul>
            </div>
          </div>
          <div id="copyright" class="col-md-12 copyright">
            <p class="text-center"> Copyright &copy; 2019 <span class="company_name"> Vetrina Healthcare Pvt. Ltd.</span></p>
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets/js/'); ?>slick.min.js"></script>
        <script src="<?php echo base_url('assets/js/'); ?>custom.js"></script>
        <script type="text/javascript">
          window.onscroll = function() {myFunction()};

          var header = document.getElementById("myHeader");
          // console.log(header);
          var sticky = header.offsetTop;

          function myFunction() {
            // alert('');
            if (window.pageYOffset > sticky) {
              header.classList.add("sticky");
            } else {
              header.classList.remove("sticky");
            }
          }



        function toggleChevron(e) {
		$(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('fa-caret-down fa-caret-right');
		}
		$('#accordion').on('hidden.bs.collapse', toggleChevron);
		$('#accordion').on('shown.bs.collapse', toggleChevron);

        </script>

      </body>
    </html>