<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Form Pendaftaran</title>

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
			
			<a class="brand" href="">
                            Form Pendaftaran Online
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">		
						
					</li>
					<li class="">						
                                            <a href="<?php echo site_url('login');  ?>" class="">
							<i class="icon-chevron-left"></i>
							Back to login
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="<?php echo site_url('register/auth')?>" method="post">
		
			<h1>Daftar</h1>			
			
			<div class="login-fields">
				
				<p>Buat Akun Anda :</p>
				
				<div class="field">
					<label for="firstname">Nama:</label>
					<input type="text" id="nama" name="nama" value="" placeholder="nama" class="login" />
				</div> <!-- /field -->
				 
				
				<div class="field">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				 
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				
									
				<button class="button btn btn-primary btn-large">Daftar</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="login.html">Login to your account</a>
</div> <!-- /login-extra -->


<script src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/signin.js"></script>

</body>

 </html>
