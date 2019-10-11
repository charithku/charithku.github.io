<!DOCTYPE html>
<html lang="en">
<?php
 require_once("./header.php");
 include("./footer.php");
    
 ?>

<body>

<section id="container" >

    <!--main content start-->
    <section id="main-content">
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
                                        <li><a href="#">Export to Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>Emp No</th>
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
								$sql = "SELECT * FROM request";
								$result = mysqli_query($db, $sql);
								
								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								$x=10;
								while($x>0) {
									
					              echo "<tbody>"; 
								  //echo "<option value='".$row[itemcode]."'>".$row[itemcode]."</option>";
									
									
									echo "<tr class=\"\">";
										echo "<td>"."A1"."</td>";
									    echo "<td>"."B1"."</td>";
										echo "<td>"."C1"."</td>";
										echo "<td>"."D1"."</td>";
										echo "<td>"."E1"."</td>";
										echo "<td><a class=\"edit\" href=\"javascript:;\">Edit</a></td>";
										echo "<td><a class=\"delete\" href=\"javascript:;\">Delete</a></td>";
                                    
									echo "</tr>";
								 echo "</tbody>";
                                     $x--;								 
									}
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


</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!---------------./assets/--------------------------->
<!--Core js-->
<!--Core js-->
<script src="./assets/js/jquery-1.8.3.min.js"></script>
<script src="./assets/bs3/js/bootstrap.min.js"></script>     <!--drop down button disabled due to this-->
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

<!------------./assets/---------------------------------------------------->


<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
</html>
