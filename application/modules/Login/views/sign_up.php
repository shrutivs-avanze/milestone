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
			<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="panel panel-info">
						<div class="panel-heading">Register </div>
			<form action="<?php echo base_url();?>Login/savesignup" id="form1" method="POST"  >			
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<label>Full Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="fname" id="fname" class="form-control">
										<i style="color:red" id="fnameerror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label>Mobile</label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="mobile" id="mobile" class="form-control">
										<i style="color:red" id="mobileerror"></i>
									</div>
								</div>
								<br>
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
										<input type="password" name="password"  id="password" class="form-control">
										<i style="color:red" id="passworderror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label>Gender</label>
									</div>
									<div class="col-sm-8">
										<input type="radio" name="gender" value="male" id="male"> Male
										<input type="radio" name="gender" value="female" id="female"> Female
										<br>
										<i style="color:red" id="gendererror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label>DOB</label>
									</div>
									<div class="col-sm-8">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<select name="month" id="month" class="form-control">
														<option value="">Choose Month </option>
														<option value="jan">January </option>
														<option value="feb"> Febuary </option>
														<option value="mar">March </option>
														<option value="apr"> April </option>
													</select>
													<i style="color:red" id="montherror"></i>
												</div>
											</div>	
											<div class="col-sm-4">
												<div class="form-group">
													<select name="day" id="day" class="form-control">
														<option value="">Choose Day </option>
														<option value="1"> 1 </option>
														<option value="2"> 2 </option>
														<option value="3"> 3 </option>
														<option value="4"> 4 </option>
													</select>
													<i style="color:red" id="dayerror"></i>
												</div>
											</div>	
											<div class="col-sm-4">
												<div class="form-group">
													<select name="year" id="year" class="form-control">
														<option value="">Choose Year </option>
														<option value="1988"> 1988</option>
														<option value="1989"> 1989 </option>
														<option value="1990"> 1990</option>
														<option value="1991"> 1991 </option>
													</select>
													<i style="color:red" id="yearerror"></i>
												</div>
											</div>	
										</div>	
									</div>
								</div>
								
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label>City</label>
									</div>
									<div class="col-sm-8">
										<select name="city" id="city" class="form-control">
											<option value=""> Choose City</option>
											<option value="bengaluru">Bengaluru </option>
											<option value="pune"> Pune </option>
											<option value="mumbai"> Mumbai </option>
											<option value="chennai"> Chennai </option>	
										</select>
										<i style="color:red" id="cityerror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group text-center">
										<button type="button" class="btn btn-primary" onclick="signup()" > Register </button>
									</div>	
								</div>
								<hr>
							<div class="form-group text-center">	
								<a href="<?php echo base_url();?>Login/index"> Login Here </a>
							</div>	
						</div>
					</div>
				</div>
		</form>		
			<div class="col-sm-2"></div>		
		</div>	
	</div>
</body>
</html>