<?php
   include("config.php");
   
    //echo "done";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myitemcode = mysqli_real_escape_string($db,$_POST['Itemcode']);
	  $myempno=mysqli_real_escape_string($db,$_POST['EmpNo']);
      $myqty = mysqli_real_escape_string($db,$_POST['Qty']);
	  $mylastissueyr = mysqli_real_escape_string($db,$_POST['LastIssueYr']);
	  $myreason = mysqli_real_escape_string($db,$_POST['Reason']);
	  
	 
	  $sql = "INSERT INTO request".
         "(empNo,itemcode,qty,lastIssueYr,reason,status)".
         "VALUES ('$myempno','$myitemcode', '$myqty','$mylastissueyr','$myreason','0')";
		
	    mysqli_query($db, $sql);
		
	  
      $db->close();
      header("location:tool_request.php");
   }
?>
