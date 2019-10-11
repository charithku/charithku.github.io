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
						Approve with More info
					</header>
					<div class="panel-body">
					
					        <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">

                             <thead>
                                <tr>
                                    <th>Emp No</th>
									<th>Emp Name</th>
									<th>Region</th>
                                    <th>Item Code</th>
									<th>Tool Description</th>
                                    <th>Qty</th>
                                    <th>Last Issue</th>
									<th>Reason</th>
									<th>Prefered Brand</th>
									<th>User Remarks</th>
									<th>Requested Date</th>
									

                                  
                                </tr>
                                </thead>
								<?php

								
								include("config.php");
								//session_start();
								if($_SERVER["REQUEST_METHOD"] == "POST"){

								$myrequestid = mysqli_real_escape_string($db,$_POST['requestId']);
								$sql = "SELECT * FROM request JOIN user ON request.empNo=user.EmpNo WHERE requestID=$myrequestid";
								$sql2 = "SELECT * FROM request JOIN tool ON request.itemcode=tool.itemcode WHERE requestID=$myrequestid";
								
								$result = mysqli_query($db, $sql);
								$result2 = mysqli_query($db, $sql2);
								
								}
								
								if (mysqli_num_rows($result) > 0) {
					            echo "<tbody>"; 
								// output data of each row
							    $row= mysqli_fetch_assoc($result);
								$row2 = mysqli_fetch_assoc($result2);
								  //echo "<option value='".$row[itemcode]."'>".$row[itemcode]."</option>";
									echo "<tr class=\"\">";
										echo "<td>".$row["empNo"]."</td>";
										echo "<td>".$row["EmpName"]."</td>";
										echo "<td>".$row["SubRegion"]."</td>";
									    echo "<td>".$row["itemcode"]."</td>";
										echo "<td>".$row2["description"]."</td>";
										echo "<td>".$row["qty"]."</td>";
										echo "<td>".$row["lastIssueYr"]."</td>";
										echo "<td>".$row["reason"]."</td>";
										echo "<td>".$row["preferedBrand"]."</td>";
										echo "<td>".$row["remarks"]."</td>";
										echo "<td>".$row["timestamp"]."</td>";
										
									echo "</tr>";
										
								 echo "</tbody>";	
								}
							    	
								?>
                            </table>
                        </div>

			
						
						<!--<div class="position-center">-->
						
							<form role="role" method="post" action="approval_with_remarks.php">
								<div class="container-fluid">
			
								<div class="row">
									<div class = "col-lg-3">
										<label for="remarks">Remarks</label>
										<input type="text" class="form-control" placeholder="Enter your remarks" name="remarks" required>
									</div>
								</div>
								
							        <!--<div class="position-">-->
									
									<br></br>
									
									
										<!--<button type="submit" class="btn btn-info registerbtn">Approve</button>-->
										<?php
										echo "<button class='btn btn-success' onclick='approve(".$row["requestID"].")'>Approve</button> <a></a>";
										echo "<button class='btn btn-danger' onclick='reject(".$row["requestID"].")'>Reject</button>";
										?>
										
										
									
									
								    <!--<button type="reset" class="btn btn-warning signin" onclick='reject(".$row["requestID"].")'>Reject</button>-->
									
									<br></br>

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

<script type="text/javascript">

    function approve(requestId) {
      var form = document.createElement("form");
      form.setAttribute("method", "post");
      form.setAttribute("action", "approve-process.php");
	  //form.setAttribute("action", "test.php");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "requestId");
        hiddenField.setAttribute("value", requestId);


        form.appendChild(hiddenField);
        document.body.appendChild(form);
        form.submit();
    }

    function reject(requestId) {
      var form = document.createElement("form");
      form.setAttribute("method", "post");
      form.setAttribute("action", "reject-process.php");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "requestId");
        hiddenField.setAttribute("value", requestId);

        form.appendChild(hiddenField);

        document.body.appendChild(form);
        form.submit();
    }
	function viewItemtest(key){
		alert("done");
	}
  </script>


</body>
</html>