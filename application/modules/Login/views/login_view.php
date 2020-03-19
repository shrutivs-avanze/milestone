<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url();?>dist/css/bootstrap.css">
		<script src="<?php echo base_url();?>dist/js/jquery.min.js"></script>
	       <script src="<?php echo base_url();?>dist/js/validation.js"></script>
	</head>
<body>	
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-info">
						<div class="panel-heading"> User Login </div>
							<?php echo $this->session->flashdata("msg");?>
			<form action="<?php echo base_url();?>Login/usercheck"  id="form" method="POST">		
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<label> Email Id </label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="email" id="email" class="form-control">
										<i style="color:red" id="emailerror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label> Password </label>
									</div>
									<div class="col-sm-8">
										<input type="password" name="password" id="pwd" class="form-control">
										<i style="color:red" id="pwderror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group text-center">
										<button type="button" class="btn btn-primary"  onclick="validate()"> Login </button>
										<button type="reset" class="btn btn-danger"> Reset </button>
									</div>	
								</div>
								<hr>
							<div class="form-group text-center">	
								<a href="<?php echo base_url();?>Login/signup"> Register Here </a>
							</div>	
						</div>
					</form>		
						
					</div>
				</div>
			<div class="col-sm-4"></div>		
		</div>	
	
	</div>
</body>
</html>