

        <div class="container w3-margin-top">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=<?php echo base_url('home'); ?>>Home</a></li>
                    <li class="breadcrumb-item"><a href="#" onclick="goBack()"><?php echo ucfirst($product_name); ?><!-- Product --></a></li>
                </ol>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="row w3-center w3-margin-top"><div class="col-md-12"><h1><?php echo ucwords($product_name);?></h1></div></div>
            <div class="row">
                <section class="featured-posts w3-margin-top">
                    <div class="container">
                        <div class="products-list col-md-12" id="products-list">
                            <?php $index=0; foreach($products AS $product): ?>
                            <?php if($index == 0 || $index == 3 || $index == 6): ?>
                            <div class="row">
                            <?php endif; ?>
                                <div class="item col-md-4 list-item">
                                    <div class="product-image">
                                        <a href="#"> <img src="<?php echo !empty($product['image_name']) ? base_url('uploads/product/'.$product['image_name']) : base_url('assets/images/dummy-packaing.png'); ?>" alt="<?php echo $product['title']; ?>"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="header">
                                            <h2 class="product-name"><?php echo $product['title']; ?></h2><br>
                                            <h3 class="product-tagline"><?php echo $product['ingredients']; ?></h3>
                                        </div>
                                        <div class="desc std">
                                            <div class="benefits">
                                                <b>Benefits</b>
                                                <?php echo $product['description']; ?>
                                            </div><br>
                                            <span class="hide more_info span1 " id="more_info">
                                                <div class="feeding">
                                                    <b>Directions to Use:</b>
                                                    <?php echo $product['feeding_instruction']; ?>
                                                </div><br>
                                                <div class="packaging">
                                                    <b>Packaging</b>
                                                    <?php echo $product['packaging']; ?>
                                                </div><br>
                                                
                                            </span>
                                            <div align="right">
                                                <button id="" class="btn btn-primary kw1">know more..</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php if($index == 2 || $index == 5 || $index == 8): ?>
                            </div>
                            <?php endif; ?>
                            <?php $index++; endforeach; ?>
                        </div>
                    </div>
                    <nav class="container" aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <?php echo $this->pagination->create_links(); ?>
                        </ul>
                    </nav>
                </section>
            </div>
        </div><!-- /.container -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
                        <h3>Address:</h3>
                        1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, Pune-411046, <br />Maharashtra, India<br />
                        E-Mail: info@vetrinahealthcare.com<br />
                        Website:www.vetrinahealthcare.com<br /><br />
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
                        window.onscroll = function () {
                            myFunction()
                        };

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
                        for (let i = 0; i < buttons.length; i++) {
                            const button = buttons[i];
                            const span = spans[i - 1];
                            button.addEventListener("click", function () {
                                $(span).toggleClass('hide');
                                // alert('button '+i+' Pressed');
                            });
                        }
            </script>
    </body>
</html>
