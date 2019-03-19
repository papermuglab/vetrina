    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footerAddress">
              <h3>Address:</h3> 
              1, Unique Tower, Chandrabhaga Nagar,<br> Katraj Dairy Road, Katraj, Pune-411046, <br />Maharashtra, India<br />
              Contact No: +91 8600844450<br />
              
              E-Mail: info@vetrinahealthcare.com<br />
              Website:www.vetrinahealthcare.com <br /><br />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 navigation">
              <ul>
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                <li><a href="<?php echo base_url('home'); ?>#products">Products</a></li>
                <li><a href="<?php echo base_url('blogs'); ?>">Blogs</a></li>
                <li><a href="<?php echo base_url('career'); ?>">Career</a></li>
                <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>            
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="iconSocial">
               <h3>Follow Us</h3> 
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
            <div class="col-md-6 col-xs-6 copyright-section">
              <p class="text-right"> Copyright &copy; 2019 </p> 
            </div>
            <div class="col-md-6 col-xs-6 copyright-section">
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
        $('#kw1').click(function(){
          $('#k_w1').toggleClass('hide');
        });
        
          window.onscroll = function() {myFunction()};

          var header = document.getElementById("myHeader");
          console.log(header);
          var sticky = header.offsetTop;

          function myFunction() {
            if (window.pageYOffset > sticky) {
              header.classList.add("sticky");
            } else {
              header.classList.remove("sticky");
            }
          }

           $("#contact_form").submit(function(e){
                e.preventDefault();
            // $("#contact_me").on('click', function(){
                // console.log('c');
                $.ajax({
                    url: '<?php echo base_url('contact/addInquiry'); ?>',
                    method: 'POST',
                    async: false,
                    data: $("#contact_form").serialize(),
                    beforeSend: function () {
                        $("#contact_me").prop('disabled', true); // disable button
                    },
                    success: function (response) {
                        console.log(response);
                        $("#ajax_message").html(response);
                        $("#contact_form").trigger("reset");
                        $("#contact_me").prop('disabled', false);
                    }
                });
            });

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
