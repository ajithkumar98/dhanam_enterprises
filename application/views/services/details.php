
<body style="background-color: white !important">
<div class="container" style="width: 100% !important;margin-top: 30px">	
<div class="row">	

<div class="col-md-4 detail-pic" style="background-image:url(' <?php 	echo base_url(); ?>assets/pics/<?php echo $details['thumb']; ?>.jpg' );height: 300px;width: 15vw;background-size: cover;" ></div>


<div class="col-md-8" style="padding-left: 20px">
<div style="padding-left: 20px">		
<h1 id="detail-head" style="  text-decoration-line: underline;
    text-decoration-style: solid;"><?php echo $details['name']; ?></h1>
<div class="lab"><?php echo ucfirst($details['brand']); ?> <?php 	echo ucfirst($details['type']); ?></div>
<div class="">M.R.P :<span style="color: red"><strike> INR <?php echo $details['mrp']; ?> </strike> </span></div>
<div class="lab">Special Discount : <?php 	echo $details['discount']; ?>%</div>
<div class="lab">Special Price : <span style="color: #2af218">	INR <?php echo $details['price'];	 ?></span></div><br>

<h5>Offers : <?php echo $details['subscription']; ?>	<?php 	echo ucfirst($details['period']); ?> Free Subscription</h5><br>
<div style="box-shadow: 0 0 0 2px lightgrey;padding: 20px">
<div class="lab">Intrested? Enter your details and we'll contact you in minutes</div><br>
<?php   echo form_open('home') ; ?>
      <label class="lab">Name:</label><br>
        <input class="input" type="text" name="name" placeholder="Enter your name" style="width: 60%"><br><br>
      <label class="lab">Number:</label><br>
        <input  class="input" type="number" name="number" placeholder="Enter your phone number" style="width: 60%"><br><br>
        <input class="btn btn-primary" type="submit" name="submit" value="ENQUIRE NOW">
      </form> 
      </div>

</div>
</div>


<div class="col-md-12 enquire" style="margin-top: 15px">	
<h4 style="  text-decoration-line: underline;
    text-decoration-style: double;">Why Choose Us?</h4><br>

<div class="row lab" style="text-align: center;color: red">	
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Free-Installation<br><br>
<img src="<?php echo base_url(); ?>assets/pics/free-install.png" style="width: 15vw">	

</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Delivery in 24 Hours<br><br>
<img src="<?php echo base_url(); ?>assets/pics/free-delivery.png"  style="width: 15vw">

</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">1 year Warrenty<br><br>
<img src="<?php echo base_url(); ?>assets/pics/warranty.png" style="width:15vw">
</div>
<div class="col-md-3" style="  text-decoration-line: underline;
    text-decoration-style: double;">Safe Transaction<br><br>
<img src="<?php echo base_url(); ?>assets/pics/safe-transaction.png" style="width:15vw">

</div>
</div>
</div>

</div>
</div><br><br>

<div class="comtainer enquire" style="width: 100% !important;margin-bottom: 20px"> 
<div class="row">
    <div class="col-md-12 lab">Hot Deals Of The Day</div><br><br>

<?php foreach ($service as $key) {?>

    <div class="col-md-3">
        <div class="enquire"> 
        <img src="<?php echo base_url(); ?>assets/pics/<?php 	echo $key['thumb']; ?>.jpg" style="width: 100%;height: 100%"><br>	
    <!-- <img src="<?php echo "assets/pics/".$key['thumb'].".jpg"; ?>" style="width: 100%;height: 100%"><br> -->
    <span class="lab"><?php echo word_limiter($key['name'],6); ?></span><br>
    <span class="lab"> <strike><span style="color: red">INR : <?php  echo $key['mrp']; ?></span></strike> <br><span style="color: green">
Discount : <?php echo $key['discount'];	?>%</span>
   <br> INR : <?php  echo $key['price']; ?></span><br>
    <div> <?php  echo $key['subscription'];  ?><?php   echo $key['period']; ?> Free Subscription</div><br><br>
    <a href="<?php echo base_url();?>services/test/<?php echo $key['id']; ?>"><button class="btn">View Product</button></a>
</div>
</div>
 <?php } ?>
</div></div>

