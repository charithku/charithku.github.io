<?php

								
								include("config.php");
								//session_start();
								if($_SERVER["REQUEST_METHOD"] == "POST"){
									
									echo "done";

								$myrequestid = mysqli_real_escape_string($db,$_POST['requestId']);
							    $myremarks = mysqli_real_escape_string($db,$_POST['remarks']);
								
								$sql = "UPDATE request SET remarks='$myremarks' WHERE requestID=$myrequestid";
								$result = mysqli_query($db, $sql);
								
								}
								
								$db->close();
                                //header("location:toDo_table.php");
								
?>