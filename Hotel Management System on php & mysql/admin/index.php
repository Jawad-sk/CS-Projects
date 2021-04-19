<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Panel</title>
  <link rel="stylesheet" type="text/css" href="css\dmSheet.css">
</head>
<body style="background-image: url('assets/img/backGround.jpeg');">
  <div class="mainDiv">
    <div class="loginDiv">
      <div class="leftDiv">
        <img src="assets/img/adminlock.jpeg" alt="Login Image" width="300px" height="280px">
      </div>
      <div class="rightDiv">
        <p id="adminHead"><b>ADMIN LOGIN</b></p>
        <form method="post">
          <input class="inputAll" value="Username" name="user" type="text" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
          <input class="inputAll" type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
          <br>
          <input class="mainButton" type="submit" name="sub" value="Login">
        </form>
        <br><br> 
          <h3><a id="backHead" href="../index.php">BACK TO THE HOME PAGE.</a></h3></div>
        </div>
      </div>
   
</body>
</html>


<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: home.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
