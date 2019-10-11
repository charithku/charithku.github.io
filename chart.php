<?php
//predefined color presets for the pie chart
$colors = array();
$colors[]="#52D726";
$colors[]="#FFEC00";
$colors[]="#FF7300";
$colors[]="#FF0000";
$colors[]="#007ED6";
$colors[]="#7CDDDD";
$colors[]="#F47A1F";
$colors[]="#FDBB2F";
$colors[]="#377B2B";
$colors[]="#7AC142";
$colors[]="#007CC3";
$colors[]="#00529B";
$colors[]="#6050DC";
$colors[]="#D52DB7";
$colors[]="#FF2E7E";
$colors[]="#FF6B45";
$colors[]="#FFAB05";
$colors[]="#ffec21";
$colors[]="#378aff";
$colors[]="#ffa32f";

//assume following are the data you have been fetched from the database
$results = array();
$results[]=array("value" => 120, "name" => "Sri Lanka");
$results[]=array("value" => 100, "name" => "India");
$results[]=array("value" => 80, "name" => "Bangladesh");
$results[]=array("value" => 60, "name" => "Pakistan");
$results[]=array("value" => 50, "name" => "Nepal");
$results[]=array("value" => 40, "name" => "Afghanistan");
$results[]=array("value" => 35, "name" => "Bhutan");
$results[]=array("value" => 30, "name" => "Maldives");
?>

<!DOCTYPE html>
<html lang="en">
<?php
 require_once("./header.php");
 include("./footer.php");
    
 ?>
 
<section id="main-content">    <!--main content start-->

<section class="wrapper">

<!--doughnut Charts-->
<div class="row">
                <div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading">
                            Employee Category
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


							<div class="chart-pie pt-4">
										<canvas id="myPieChart"></canvas>
									</div>
									
		<?php
		$labels = array();
		$values = array();
		
		include("config.php");
		
		$sql = "SELECT
					CASE Company
						WHEN 'Crime Watch' THEN 'Crime Watch'
						WHEN 'IBT' THEN 'IBT'
						WHEN 'Mobitel' THEN 'Mobitel'
						WHEN 'Mobitel HCS' THEN 'Mobitel HCS'
						
					ELSE NULL
											
					END AS Company,
					COUNT(*)
				FROM request JOIN user ON request.empNo=user.EmpNo
				GROUP BY Company
				ORDER BY Company";
			
			if ($result = mysqli_query($db, $sql)) {
				
				while ($row = mysqli_fetch_row($result)) {
					array_push($labels,'"'.$row[0].'"');
					array_push($values,$row[1]);
				}
				mysqli_free_result($result);
			}
		?>
							
		</div>
		</section>
	</div>
	
<!--Start-Chart-request reason-->
	
	<div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading">
                            Reason for Request
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


							<div class="chart-pie pt-4">
										<canvas id="myPieChart1"></canvas>
									</div>
									
		<?php
		$labels1 = array();
		$values1 = array();
		
		//include("config.php");
		
		$sql = "SELECT
					CASE reason
						WHEN 'New requirement' THEN 'New requirement'
						WHEN 'Lost' THEN 'Lost'
						WHEN 'Damaged' THEN 'Damaged'
					ELSE NULL
											
					END AS reason,
					COUNT(*)
				FROM request
				GROUP BY reason 
				ORDER BY reason";
			
			if ($result = mysqli_query($db, $sql)) {
				
				while ($row = mysqli_fetch_row($result)) {
					array_push($labels1,'"'.$row[0].'"');
					array_push($values1,$row[1]);
				}
				mysqli_free_result($result);
			}
		?>
							
		</div>
		</section>
	</div>
	
	<!--End-Chart-request reason-->
	
	
	<!--Start-Chart-Last issued yr-->
	
	<div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading">
                            Last Issued Yr for Lost/Damged Tools
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">


							<div class="chart-pie pt-4">
										<canvas id="myPieChart2"></canvas>
									</div>
									
		<?php
		$labels2 = array();
		$values2 = array();
		
		//include("config.php");
		
		$sql = "SELECT
					CASE lastIssueYr
						WHEN '2016' THEN '2016'
						WHEN '2015' THEN '2015'
						WHEN '2017' THEN '2017'
					ELSE NULL
											
					END AS lastIssueYr,
					COUNT(*)
				FROM request
				GROUP BY lastIssueYr 
				ORDER BY lastIssueYr";
			
			if ($result = mysqli_query($db, $sql)) {
				
				while ($row = mysqli_fetch_row($result)) {
					array_push($labels2,'"'.$row[0].'"');
					array_push($values2,$row[1]);
				}
				mysqli_free_result($result);
			}
		?>
							
		</div>
		</section>
	</div>
	
	<!--End-Chart-Last issued yr-->
</div>
	<!--End-donut Chart-->	
		
		
<div class="row">
                
</div>

<!-- Bar Chart-Region wise Total Tool count-->
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Region Wise Tool Request count
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
						<div class="chart-bar">
							<canvas id="myBarChart"></canvas>
						</div>
		<?php
		$labels3 = array();
		$values3 = array();
		
		//include("config.php");
		
		$sql = "SELECT
					CASE SubRegion
						WHEN 'Badulla' THEN 'BAD'
						WHEN 'Ampara' THEN 'AMP'
						WHEN 'Jaffna' THEN 'JAF'
						WHEN 'Chilaw' THEN 'CHI'
					ELSE NULL
											
					END AS SubRegion,
					COUNT(*)
				FROM request JOIN user ON request.empNo=user.EmpNo
				GROUP BY  SubRegion
				ORDER BY SubRegion";
			
			if ($result = mysqli_query($db, $sql)) {
				
				while ($row = mysqli_fetch_row($result)) {
					array_push($labels3,'"'.$row[0].'"');
					array_push($values3,$row[1]);
				}
				mysqli_free_result($result);
			}
		?>
						




                    </div>
                </section>
            </div>
        </div>

<!-- End-Bar Chart-Region wise Total Tool count -->

<!-- Bar Chart-Region wise SELECTED Tool count-->
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Region Wise RGO-TL-LOC-TOOLBAG Request count
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
						<div class="chart-bar">
							<canvas id="myBarChart4"></canvas>
						</div>
		<?php
		$labels4 = array();
		$values4 = array();
		
		//include("config.php");
		
		$sql = "SELECT
					CASE itemcode
						WHEN 'Badulla' THEN 'BAD'
						WHEN 'Ampara' THEN 'AMP'
						WHEN 'Jaffna' THEN 'JAF'
						WHEN 'Chilaw' THEN 'CHI'
					ELSE NULL
											
					END AS SubRegion,
					COUNT(*)
				FROM request JOIN user ON request.empNo=user.EmpNo WHERE request.itemcode='RGO-TL-LOC-TOOLBAG'
				GROUP BY  SubRegion
				ORDER BY SubRegion";
			
			if ($result = mysqli_query($db, $sql)) {
				
				while ($row = mysqli_fetch_row($result)) {
					array_push($labels4,'"'.$row[0].'"');
					array_push($values4,$row[1]);
				}
				mysqli_free_result($result);
			}
		?>
						




                    </div>
                </section>
            </div>
        </div>

<!-- End-Bar Chart -->
</section>
</section>

<!-- Page specific plugins -->
	<script src="./vendor_nishad/chart.js/Chart.min.js"></script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';
		
		
		
		// Pie Chart Example
		var ctx = document.getElementById("myPieChart");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: [<?php echo(implode(",",$labels)); ?>],
				datasets: [{
					data: [<?php echo(implode(",",$values)); ?>],
					backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#ff6384','#7AC142'],
					hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#e36882'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 80,
			}
		});
	</script>

<!-- inline scripts related to this page -->
	<script type="text/javascript">
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';
		
		
		
		// Pie Chart Example
		var ctx = document.getElementById("myPieChart1");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: [<?php echo(implode(",",$labels1)); ?>],
				datasets: [{
					data: [<?php echo(implode(",",$values1)); ?>],
					backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#ff6384'],
					hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#e36882'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 80,
			}
		});
		
		//dough nut chart for last issue yr///
		
		var ctx = document.getElementById("myPieChart2");
		var myPieChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: [<?php echo(implode(",",$labels2)); ?>],
				datasets: [{
					data: [<?php echo(implode(",",$values2)); ?>],
					backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#ff6384'],
					hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#e36882'],
					hoverBorderColor: "rgba(234, 236, 244, 1)",
				}],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: '#dddfeb',
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false
				},
				cutoutPercentage: 80,
			}
		});
	</script>
	
<!--Start-bar chart-->
	
<script>	
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

<!-- Bar Chart-Region wise Total Tool count-->
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php echo(implode(",",$labels3)); ?>],
    datasets: [{
      label: "Revenue",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [<?php echo(implode(",",$values3)); ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 175,
          maxTicksLimit: 7,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

<!-- Bar Chart-Region wise SELECTED Tool count-->
var ctx = document.getElementById("myBarChart4");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php echo(implode(",",$labels4)); ?>],
    datasets: [{
      label: "Revenue",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [<?php echo(implode(",",$values4)); ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});
	
		

</script>

<script src="./assets/js/chart-js/Chart.js"></script>

</html>