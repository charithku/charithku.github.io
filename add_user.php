<?php
 require_once("./header.php");
 include("./footer.php");
    
 ?>
 
<section id="main-content">
<section class="wrapper">

		<div class="main">
						
				<section class="panel">
					<header class="panel-heading">
						Employee Details
					</header>
					<div class="panel-body">
						<!--<div class="position-center">-->
							<form role="role" method="post" action = "add_user-process.php" >
								<div class="container-fluid">
			
								<div class="row">
													
																		
									<div class = "col-lg-3">
										<label for="EmpNo">Employee No</label>
										<input type="text" class="form-control" placeholder="Enter Employee No" name="EmpNo" required>
									</div>
									
									<div class = "col-lg-3">
										<label for="EmpName">Employee Name</label>
										<input type="text" class="form-control" placeholder="Enter Employee Name" name="EmpName" required>
									</div>
									
									<div class = "col-lg-3">
										<label for="Region">Sub-Region</label>
										<select class="form-control m-bot15" name="Region" required>
										    <option>Select Region</option>
											<option>CHI</option>
											<option>NEG</option>
											<option>GAM</option>
											<option>KAD</option>
											<option>PET</option>
									    </select>
									</div>
									
									<div class = "col-lg-3">
										<label for="Contact">Contact No</label>
										<input type="number" class="form-control" placeholder="Enter Contact Number" name="Contact" required>
									</div>
								</div>
									<div class="row">
									
									<div class = "col-lg-3">
										<label for="Company">Company</label>
									    <select class="form-control m-bot15" name="Company" required>
										    <option> </option>
										    <option>Mobitel</option>
										    <option>Mobiz</option>
											<option>IBT</option>
											<option>Crime-Watch</option>
									    </select>
									</div>
									
									<div class = "col-lg-3">
										<label for="DOJ">Date of Joint</label>
										<input type="Date" class="form-control" placeholder="Enter Date of Joint" name="DOJ" required>
									</div>
																		
									</div>			
								
							        <!--<div class="position-">-->
									<button type="submit" class="btn btn-info registerbtn">Submit</button>
									<button type="reset" class="btn btn-warning signin">Cancel</button>
	
									<!--<button type="submit" class="registerbtn">Add</button>
									<button type="reset" class="signin">Cancel</button>
		                            </div>-->
		                         </div>
							</form>
						</div>
			</section>
		</div>
	</div>
	</div> 
</section>
</section>