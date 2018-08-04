</div>


<!-- ***********Image slideshow*********** -->
<div class="banner">  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" style="background-image: url('assets/pics/slide1.jpg');background-size: contain;height: 100%;width: 100%;background-repeat: no-repeat;">
     
    </div>
    <div class="carousel-item" style="background-image: url('assets/pics/slide2.jpg');background-size: contain;height: 100%;width: 100%;background-repeat: no-repeat;">
  
    </div>
    <div class="carousel-item" style="background-image: url('assets/pics/slide2.jpg');background-size: contain;height: 100%;width: 100%;background-repeat: no-repeat;">
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ****************************** -->

<div class="container">
<div class="row" style="padding-top: 20px">
  <div class="col-md-4" style="padding: 15px">
<img src="assets/pics/customer.jpeg" style="width: 100%">

    <div style="" class="enquire">
    <?php   echo validation_errors(); ?>
      <span  class="lab">Confused In Choosing a Pack?<br>Let our team help you out</span>
    <div style="text-align: left;padding: 10px">
      <?php   echo form_open('home') ; ?>
      <label class="lab">Name:</label><br>
        <input class="input" type="text" name="name" placeholder="Enter your name"><br><br>
      <label class="lab">Number:</label><br>
        <input  class="input" type="number" name="number" placeholder="Enter your phone number"><br><br>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
      </form> 
    </div>
    </div>
  </div>


  <div class="col-md-4" style="padding: 15px">
    <div class="enquire">
      <span class="lab">DTH Services</span>
       <div style="padding: 14px">
        <img src="assets/pics/tata-sky.jpg" style="width: 100%"><br><br>
        <a href="<?php echo base_url();?>services/view/tatasky"><button class="btn">View All Products</button></a>
      </div>

      <div style="padding: 14px">
        <img src="assets/pics/airtel.png" style="width: 100%"><br><br>
        <a href="<?php echo base_url();?>services/view/airtel"><button class="btn">View All Products</button></a>
      </div>
     
    </div>
  </div>


   <div class="col-md-4" style="padding: 15px">
    <div class="enquire">
      <span class="lab">Broadband Services</span>
      <div style="padding: 10px">
        <img src="assets/pics/airtel1.png" style="width: 100%"><br><br>
        <a href="<?php echo base_url();?>services/broadband/airtel-broadband"><button class="btn">View All Products</button></a>
      </div>
      <div style="padding: 10px">
        <img src="assets/pics/hathway.png" style="width: 100%"><br><br>
        <a href="<?php echo base_url();?>services/broadband/hathway"><button class="btn">View All Products</button></a>
      </div>

    </div>
  </div>


<!-- *********pop-ip************** -->
<div id="ac-wrapper" style="display: none;">
    <div id="popup">
    <img style="position: absolute;z-index: -1" src="<?php  echo base_url(); ?>assets/pics/mobile-pop.jpg" width="100%" height="100%" class="img-responsive">
        <center>
        <div style="" class="ban-enquire">
        <?php   echo validation_errors(); ?>
      <span  class="lab">Confused In Choosing a Pack?<br>Let our team help you out</span>
    <div class="enq-form">
      <?php   echo form_open('home') ; ?>
      <label class="ban-lab">Name:</label><br>
        <input class="ban-input" type="text" name="name" placeholder="Enter your name"><br><br>
      <label class="ban-lab">Number:</label><br>
        <input  class="ban-input" type="number" name="number" placeholder="Enter your phone number"><br><br>
        <input class="btn btn-primary sub" type="submit" name="submit" value="SUBMIT">
      </form> 
    </div>
    </div>
            <input type="submit" style="position: absolute;bottom: 10%" class="btn close" name="submit" value="Close" onClick="PopUp('hide')" />
        </center>
    </div>
</div>

<!-- ************************************ -->

<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">Hot Deals Of The Day</div><br><br>

<?php foreach ($service as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
    <img src="<?php echo "assets/pics/".$key['thumb'].".jpg"; ?>" style="width: 100%;height: 100%"><br>
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
    <span class="lab"> <strike><span style="color: red">INR : <?php  echo $key['mrp']; ?></span></strike> <br>INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['subscription'];  ?><?php   echo $key['period']; ?> Free Subscription</div><br><br>
    <a href="<?php echo base_url();?>services/test/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>