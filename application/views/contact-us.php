
    <link href="<?php echo base_url('assets/css/'); ?>w3.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/'); ?>form.css" rel="stylesheet">
    <div class="container-fluid">
      <div class="row"> 
        <div class="container">      
          <div class="col-md-6">
            <div class="contact_container">
              <div class="w3-display-middle">
                <h3>Contact Info</h3>
                <p><b>ADDRESS:</b> <br>
                  1, Unique Tower, Chandrabhaga Nagar, Katraj Dairy Road, Katraj, Pune-411046, <br />Maharashtra, India<br /></p>
                <p><b>E-Mail:</b> <br> info@vetrinahealthcare.com<br /></p>
                <p><b> Contact No.</b> <br>+91 8600844450</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form_container">
                <span id="ajax_message" style=""></span>
                <h3 class="w3-center">Drop Us a Message</h3>
                <form class="career_form" id="contact_form">
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class=" glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" placeholder="Your Name" name="name" aria-describedby="sizing-addon1" required='true'>
                  </div>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon1" required>
                  </div>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input type="text" class="form-control" size="10" maxlength="10" name="mobile" pattern="\d{10}" title="Please enter exactly 10 digits only" placeholder="Mobile No." aria-describedby="sizing-addon1" required>
                  </div>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
                    <textarea  class="form-control" placeholder="Enter your Message" name="message" aria-describedby="sizing-addon1" required></textarea>
                  </div>              
                  <div class="input-group submit">
                    <!-- <span class="input-group-addon" id="sizing-addon1"></span> -->
                    <input type="submit" id="contact_me" class="btn btn-primary" Value="Submit" >
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
      <div class="row w3-margin-bottom"> 
        <div class="container">   
          <span id="mobile_map">
            <div class="col-md-6">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=vetrina&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{text-align:right;height:300px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div>
            </div>
          </span>
          <span id="dextop_map">
            <div class="col-md-12">
              <div class="form_container">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="1218" height="397" id="gmap_canvas" src="https://maps.google.com/maps?q=Vetrina%20Healtcare%20Pvt.Ltd%2C%20Katraj%20Dairy%20Road%2C%20Chandrabhaga%20Chowk%2C%2C%20Shriram%20Nagar%2C%20Dhankawadi%2C%20Pune%2C%20Maharashtra%20411046%2C%20India&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.pureblack.de">web designer</a>
                  </div>
                  <style>.mapouter{text-align:right;height:397px;width:1218px;}.gmap_canvas {overflow:hidden;background:none!important;height:397px;width:1218px;}</style> 
                </div>
              </div>
            </div>
          </span>
        </div>
      </div>
    </div>