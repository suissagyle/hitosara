<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hitosara - Login</title>
	<link href="<?php echo base_url('css/admin/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/admin/datepicker3.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/admin/styles.css'); ?>" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('js/admin/html5shiv.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/respond.min.js'); ?>"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					
					<?php echo form_open("admin/login_validation"); ?>

						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<!-- <div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div> -->
							<button class="btn btn-primary" type="submit" value="LOGIN">Login</button></fieldset>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="<?php echo base_url('js/admin/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/admin/bootstrap.min.js'); ?>"></script>
</body>
</html>
