<?php
   include("config.php");
   
   //echo "done";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      
	  $myempno=mysqli_real_escape_string($db,$_POST['EmpNo']);
	  $myempname = mysqli_real_escape_string($db,$_POST['EmpName']);
      $myregion = mysqli_real_escape_string($db,$_POST['Region']);
	  $mycontact = mysqli_real_escape_string($db,$_POST['Contact']);
	  $mycompany = mysqli_real_escape_string($db,$_POST['Company']);
	  $mydoj = mysqli_real_escape_string($db,$_POST['DOJ']);
	  
	  //session_start();
	  
	  //$_SESSION['EmpNo'] =$myempno;
	  
	  //echo $_SESSION['EmpNo'];
	
	  $sql = "INSERT INTO user".
         "(EmpNo,EmpName,SubRegion,Company,contactNo,DateOfJoin)".
         "VALUES ('$myempno', '$myempname','$myregion','$mycompany','$mycontact','$mydoj')";
		
	    mysqli_query($db, $sql);
		
	  
      $db->close();
      header("location:add_user.php");
   }
?>