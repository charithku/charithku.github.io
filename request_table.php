
<!DOCTYPE html>
<html lang="en">
<?php
 require_once("./header.php");
 //include("./footer.php");
    
 ?>

<body>
<!--sidebar end-->
    <section id="main-content">    <!--main content start-->

        <section class="wrapper">
		
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editable Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
							
								<!--<div class ="table responsive">
									<form method="post" action="request_export.php">
										<button type="submit" name= "export_excel" value= "Export to Excel" class="btn btn-primary pull-right"> 
										Excel <i class="fa fa-download"></i></button>
									</form>
								</div>-->
								
                                <div class="btn-group">
                                    <button id="editable-sample_new" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </div>
								
								
								
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Save as PDF</a></li>
                                        <li><a href="./request_export.php">Export to Excel</a></li>
                                    </ul>
                                </div>
							
								
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">

                             <thead>
                                <tr>
                                    <th>Emp No</th>
									<th>Emp Name</th>
									<th>Region</th>
                                    <th>Item Code</th>
                                    <th>Qty</th>
                                    <th>Last Issue</th>
									<th>Reason</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
								<?php

								
								include("config.php");
								$sql = "SELECT * FROM request JOIN user ON request.empNo=user.EmpNo";
								$result = mysqli_query($db, $sql);
								
								if (mysqli_num_rows($result) > 0) {
					            echo "<tbody>"; 
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
								  //echo "<option value='".$row[itemcode]."'>".$row[itemcode]."</option>";
									echo "<tr class=\"\">";
										echo "<td>".$row["empNo"]."</td>";
										echo "<td>".$row["EmpName"]."</td>";
										echo "<td>".$row["SubRegion"]."</td>";
									    echo "<td>".$row["itemcode"]."</td>";
										echo "<td>".$row["qty"]."</td>";
										echo "<td>".$row["lastIssueYr"]."</td>";
										echo "<td>".$row["reason"]."</td>";
										echo "<td><a class=\"edit\" href=\"javascript:;\">Edit</a></td>";
										echo "<td><a class=\"delete\" href=\"javascript:;\">Delete</a></td>";
                                    
									echo "</tr>";
									}	
								 echo "</tbody>";	
								}
							    	
								?>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
   </section>
    <!--main content end-->

<!--</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="./assets/js/jquery-1.8.3.min.js"></script>
<script src="./assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./assets/js/jquery.scrollTo.min.js"></script>
<script src="./assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="./assets/js/jquery.nicescroll.js"></script>


<script type="text/javascript" src="./assets/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="./assets/js/data-tables/DT_bootstrap.js"></script>

<!--common script init for all pages-->
<script src="./assets/js/scripts.js"></script>

<!--script for this page only-->
<script src="./assets/js/table-editable.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>
