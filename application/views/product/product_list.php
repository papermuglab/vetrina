
        <div class="container w3-margin-top">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=<?php echo base_url('home'); ?>>Home</a></li>
                    <li class="breadcrumb-item"><a href="#" onclick="goBack()"><?php echo ucfirst($product_name); ?><!-- Product --></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($product_list);?><!-- Product List --></li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row w3-center w3-margin-top"><div class="col-md-12"><h1><?php echo ucwords($product_list);?></h1></div></div>
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

