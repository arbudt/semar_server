<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Server Server</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				SEMAR Server				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="<?php echo site_url('register') ?>" class="">
							daftar pasien baru 
						</a>
						
					</li>
					 
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?php echo site_url('login/auth'); ?>" method="POST">
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">
				
				<p>isikan data akun anda </p>
				
				<div class="field" >
					<label for="username">email</label>
                                        <input type="email" required="true"  id="username" name="email" value="" placeholder="email" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
                                        <input type="password" required="" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
			 
									
				<button  class="button btn btn-success btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

 

<script src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/signin.js"></script>

</body>

</html>
