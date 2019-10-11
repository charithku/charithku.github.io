<!DOCTYPE html>
<html lang="en">
								<?php

								
								include("config.php");
								//session_start();
								if($_SERVER["REQUEST_METHOD"] == "POST"){

								$myrequestid = mysqli_real_escape_string($db,$_POST['requestId']);
								$sql = "UPDATE request SET status=2 WHERE requestID=$myrequestid";
								$result = mysqli_query($db, $sql);
								
								}
								
								$db->close();
                                //header("location:toDo_table.php");
								?>
								
								
								
</html>