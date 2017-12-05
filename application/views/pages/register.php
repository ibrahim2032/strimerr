<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/webadmin_1.1/layouts/green/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2017 10:10:49 GMT -->
<head>
<meta charset="utf-8" />
<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="Strimerr : Register" name="description" />
	<meta content="Strimerr Malta" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico'); ?>">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body><div class="accountbg"></div>
<div class="wrapper-page">
	<div class="panel panel-color panel-primary panel-pages">
		<div class="panel-body">
			<h3 class="text-center m-t-0 m-b-15"> 
				
				<a href="index.html" class="logo logo-admin">
					<img src="<?php echo base_url('images/logo.png'); ?>" alt="logo">
				</a>
			</h3>
			<h4 class="text-muted text-center m-t-0"><b>Register</b></h4>
			
    <?php
         if($this->session->flashdata('success')){
            echo '<div class="alert alert-info fade in" align="center" style="padding: 50px; font-size: 30px; font-weight: bolder;">'. $this->session->flashdata('success'). '</div>' ;
        }
		  if($errors){
				echo '<div class="alert alert-danger fade in" align="center">'. $errors. '</div>' ;
			}
    ?>
			<form class="form-horizontal m-t-20" action="<?php echo (isset($_GET['referral']))? base_url('register').'?referral='.$_GET['referral'] : base_url('register'); ?>" method="post">
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="name" placeholder="Full Name" autofocus required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="username" placeholder="Username" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="email" class="form-control" name="email" placeholder="email"  required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="phone" placeholder="Phone Number"  required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="password" class="form-control" name="password2" placeholder="Re-Type Password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="referral" placeholder="Referral" <?php echo(isset($_GET['referral']))? 'value="'.$_GET['referral'].'" readonly' : '' ?>>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="country" placeholder="Country" required="required" value="Nigeria" readonly="readonly">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="account_name" placeholder="Account Name" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="account_number" placeholder="Account Number"  required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="bank_name" placeholder="Bank"  required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12"> 
						<input type="text" class="form-control" name="currency" placeholder="Currency" required="required" value="Naira (&#8358;)" readonly="readonly">
					</div>
				</div>
				<div class="form-group text-center m-t-40">
					<div class="col-xs-12"> 
						<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit" name="submit">Register</button>
					</div>
				</div>
				<div class="form-group m-t-30 m-b-0">
					<div class="col-sm-7"> 
                        <a href="<?php echo base_url('login'); ?>" class="text-muted">Login here</a>
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
 <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/modernizr.min.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/detect.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/fastclick.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/jquery.blockUI.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/waves.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script> 
 <script src="<?php echo base_url('assets/js/app.js'); ?>"></script> 
 </body>
</html>