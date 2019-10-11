   
   <!DOCTYPE html>
	<html lang="en">
	
	<?php
    $dataPoints = array( 
    	array("label"=>"Chrome", "y"=>64.02),
    	array("label"=>"Firefox", "y"=>12.55),
    	array("label"=>"IE", "y"=>8.47),
    	array("label"=>"Safari", "y"=>6.08),
    	array("label"=>"Edge", "y"=>4.29),
    	array("label"=>"Others", "y"=>4.59)
    )
    ?>
	
	
    <head>
    </head>
	
	<?php
	require_once("./header.php");
	//include("./footer.php");
    
	?>
	
    <body>
	<section id="main-content">    <!--main content start-->
    <section class="wrapper">
	
	<div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Pie Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


                            <div class="chartJS">
								
                                <canvas id="pie-chart-js" height="250" width="800" ></canvas>

                            </div>

                        </div>
                    </section>
                </div>
				
	</section>
	</section>
    <!--<div id="chartContainer" style="height: 370px; width: 100%;"></div>-->
	<!--<script src=".assets/js/easypiechart/jquery.easypiechart.js"></script>-->
	
	<script src="./assets/js/scripts.js"></script>

	<script src="vendor/chart.js/Chart.min.js"></script>
	
<?php
$colors = array();
$col
?>
    <script>
	var pieData = [
            {
                value: 30,
                color:"#E67A77"
            },
            {
                value : 50,
                color : "#D9DD81"
            },
            {
                value : 100,
                color : "#79D1CF"
            }

        ];

    var myPie = new Chart(document.getElementById("pie-chart-js").getContext("2d")).Pie(pieData);
	</script>
	</body>
    </html>                              