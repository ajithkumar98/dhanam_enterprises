<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
<link rel="stylesheet" type="text/css" href=" https://bootswatch.com/4/lux/bootstrap.min.css ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="<?php echo base_url();?>assets/style.js"></script>
	<title>Tata Sky DTH | Airtel DTH | Amazing Offers upto 30% | Free home delivery and installation | Airtel Broadband | Hathway Broadband</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="<?php echo base_url(); ?>">
    <!-- <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
    Dhanam Enterprises
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav pull-right">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>services">Our Services <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>services/view/airtel">Airtel dth <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>services/view/tatasky">Tata-Sky dth <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>services/broadband/airtel-broadband">Airtel Broadband <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>services/broadband/hathway">Hathway broadband<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>about">About us<span class="sr-only">(current)</span></a>
      </li>

<?php   if ($this->session->userdata('logged_in')) { ?>
         <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>users/logout">LOG OUT<span class="sr-only">(current)</span></a>
      </li>
              <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>users/admin">ADMIN PANEL<span class="sr-only">(current)</span></a>
      </li>
<?php   } ?>
    </ul>
  </div>
</nav>
<div class="container">

<?php if($this->session->flashdata('user_registerd')){ ?>
<?php echo '<p class="alert alert-sucess">'.$this->session->flashdata('user_registered').'</p>'; ?>
<?php   } ?>