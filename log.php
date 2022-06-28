 
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="log.css"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="f">
			<form  method="POST">
				<h2>Login</h2>
				<div><input type="text" name="username" placeholder="Username" minlength="3 "required></div>
				<div><input type="password" name="password" placeholder="Password" minlength="5" required></div>
				<div><input type="submit" name="name" value="Sign in"></div>
				<div><a href ="#">Don't have an account? <span>Register</span></a></div>
			</form>				 
		</div>
	</body>
</html>
<?php
   include('db.php');
session_start();
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM members WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['username'] = $myusername;
         
         
         header("location: ahmed.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>