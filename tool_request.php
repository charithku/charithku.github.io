<!DOCTYPE html>
<html lang="en">
<?php
 require_once("./header.php");
 include("./footer.php");
    
 ?>

<body>

<section id="main-content">
<section class="wrapper">
 
<!--<div class "row">-->
	<!--<div class "col-lg-6">-->
	
		<div class="main">
				
				<!--panel for request tool-->
				<section class="panel">
					<header class="panel-heading">
						Request a Tool
					</header>
					<div class="panel-body">
					
					
					<div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Select Category <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Individual Tool</a></li>
                                <li><a href="#">Common Tool</a></li>
                                <li><a href="#">Safety Equipment</a></li>
                                <!--<li class="divider"></li>
                                <li><a href="#">Separated link</a></li>-->
                            </ul>
                        </div>
					    <br></br>   <!--new line-->
						
						<!--<div class="position-center">-->
						
							<form role="role" method="post" action = "add_device-process.php" >
								<div class="container-fluid">
			
								<div class="row">
								    <div class = "col-lg-3">
									
										<label for="EmpNo">Employee No</label>
										<?php
										 include("config.php");
										 							 
										 $sql = "SELECT EmpNo from user";
			                             $result = mysqli_query($db, $sql);
										 
										 //saved db value
										 //$item_code="RGO-Tool-222"; for edit for this is needed 
										 $emp_no=" ";
										 
										 echo "<select class='form-control m-bot15' name='EmpNo' required>";
										 ?>
										 
										 <option value="" <?php if($emp_no==" "){?> selected="selected" <?php } ?>>Select EmpNo</option>
									     <?php
			                             //if (mysqli_num_rows($result1)) {
			                            
										while($row = mysqli_fetch_assoc($result)) {
											echo "<option value='".$row[EmpNo]."'>".$row[EmpNo]."</option>";
					                    }
									    echo "</select>"
										?>
									 
									</div>
							    </div>
									
								<div class="row">
								<!--<div class="form-group">-->
									
									<div class = "col-lg-3">
									
										<label for="ItemCode">ItemCode</label>
										<?php
										// include("config.php");
										 
										 
										 $sql = "SELECT itemcode from tool";
			                             $result1 = mysqli_query($db, $sql);
										 
										 //saved db value
										 //$item_code="RGO-Tool-222"; for edit for this is needed 
										 $item_code=" "
										 
										 ?>
										 
										 <select class='form-control m-bot15' name='Itemcode' required>
											
											<option value="" <?php if($item_code==" "){?> selected="selected" <?php } ?>>Select ItemCode</option>
											
										 <?php
			 
			                             //if (mysqli_num_rows($result1)) {
			                              
										while($row = mysqli_fetch_assoc($result1)) {
										 ?>
											<option value='<?php echo $row["itemcode"]; ?>' <?php if($item_code==$row["itemcode"]){?> selected="selected" <?php } ?>><?php echo $row["itemcode"]; ?></option>
											<?php
					                    }
										 ?>
										</select>
									</div>
																				
									<div class = "col-lg-3">
										<label for="Qty">Qty</label>
										<input type="text" class="form-control" placeholder="Enter Qty" name="Qty" required>
									</div>
									
									<div class = "col-lg-3">
										<label for="LastIssueYr">Last Issue Year</label>
										<input type="text" class="form-control" placeholder="Enter Last Issue Year" name="LastIssueYr" required>
									</div>
									
									<div class = "col-lg-3">
										<label for="Reason">Reason for Request</label>
									    <select class="form-control m-bot15" name="Reason" required>
										
										<option value="" <?php if($emp_no==" "){?> selected="selected" <?php } ?>>Select Reason</option>
										
										   	<option>Damaged</option>
											<option>Lost</option>
											<option>New Requirement</option>
									    </select>
									</div>
								</div>
								
								<div class="row">
									<div class = "col-lg-3">
										<label for="brand">Prefered Brand</label>
										<input type="text" class="form-control" placeholder="Enter Brand" name="brand">
									</div>
									
									<div class = "col-lg-3">
										<label for="remarks">Special Remarks</label>
										<input type="text" class="form-control" placeholder="Enter your remarks" name="remarks">
									</div>
								</div>
								
								<br></br>
								
							        <!--<div class="position-">-->
									<button type="submit" class="btn btn-success registerbtn">Submit</button>
									<button type="reset" class="btn btn-warning signin">Cancel</button>
	
									<!--<button type="submit" class="registerbtn">Add</button>
									<button type="reset" class="signin">Cancel</button>
		                            </div>-->
									
								
		
							</form>
						</div>
				</section>
				
				<!--panel for request a tool-->
		</div>
	<!--</div>-->
	<!--</div>-->


</section>
</section>

<!--<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<!--<script src="./assets/js/jquery-1.8.3.min.js"></script>
<script src="./assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./assets/js/jquery.scrollTo.min.js"></script>
<script src="./assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="./assets/js/jquery.nicescroll.js"></script>-->

<!--common script init for all pages
<script src="./assets/js/scripts.js"></script>-->






</body>
</html>