</div>

<div class="container enquire lab" style="width: 100% !important"> 
Our Services
</div>

<div class="container">
<div class="row" style="padding-top: 20px">
  <div class="col-md-4" style="padding: 15px">
<img src="assets/pics/customer.jpeg" style="width: 100%">

    <div style="" class="enquire">
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