<?php
   include("config.php");
     

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
	  
	
           
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $loginStatus = false;
	  $usertype=false;
	  
	  echo $mypassword;
	  echo $myusername;
        
      $sql = "SELECT Company,empno FROM user WHERE EmpNo='$myusername' AND password='$mypassword'";
      error_log($sql);
      $result = mysqli_query($db, $sql);

         
      if (mysqli_num_rows($result) > 0) {
		  echo "done123";
        // session_register("myusername");
           session_start();
         $_SESSION['login_user'] = $myusername;
         $loginStatus = true;
		 $row = mysqli_fetch_assoc($result);
		 
		 //if($row['usertype']=="admin")
			 //$_SESSION['user_type']=true;
			
      }else {
         echo "Your Login Name or Password is invalid";
      }

      $db->close();

      if($loginStatus){
          header("location:index.php");
	 } else {
          header("location:login.php");
      }

   }
?>
