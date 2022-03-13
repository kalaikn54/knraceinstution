<!-- this is for php signup code -->
<?php 
   // below code checks whether the form is submitted
   // using the POST method or not
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // the form is submitted using the POST method
      // now proceed to process the form's data
      $server = "localhost";
      $user = "root";
      $pass = "";
      $database = "race";
      $conn = mysqli_connect($server, $user, $pass, $database);
      if(mysqli_connect_error())
      {
         echo "<p>Error occurred..kindly try again later.</p>";
         echo "<p>Exiting...</p>";
         exit();
      }
    $errUser = $errPass = $errEmail = $errName = $errSex = $errDOB = "";
      $user = $pass = $email = $name = $sex = $dob = "";

      $user = $_POST["username"];
      $pass = $_POST["password"];
      $email = $_POST["emailid"];
      $name = $_POST["name"];
      $sex = $_POST["sex"];
      $dob = $_POST["dob"];
   }
?>



 

     <?php 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $qry = "insert into academy(username, password, emailid,fullname,  sex, dob)
            values('$user', '$pass', '$email', '$name', '$sex', '$dob');";
      $res = $conn->query($qry);
      if($res)
      {
         echo "<p>You are successfully registered to codescracker.com</p>";
         echo "<p>Your Username: <b>".$user."</b></p>";
         echo "<p>Your Password: <b>".$pass."</b></p>";
         header("location:Swelocome.php");
         exit();
      }
      else 
      {
         echo "<p>Error occurred, kindly try again later.</p>";
         exit();
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- this is for create signup -->
    <div class="index-container">
       <div class="content">
          
       <h2>Create Account or SignUp Page</h2>
      
<form action="signup.php" method="post">
Username:<br/>
<input type="text" name="username" maxlength="40" placeholder="create username" required><br/>
Password:<br/>
<input type="password" name="password" placeholder="create password"  maxlength="40" required><br/>
Email ID:<br/>
<input type="email" name="emailid" placeholder="enter email id"  maxlength="40" required><br/>
Name:<br/>
<input type="text" name="name" placeholder="enter full name"  maxlength="40" required><br/>
Sex:<br/>
<select name="sex" required>
<option value="">Select Sex</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select><br/>
DOB:<br/>
<input type="date" name="dob" value="choose DOB" required><br/><br/>
<div class="submit">
<input type="submit" name="signup" value="SignUp">
</div>
</form>

       </div>
  
    </div>  

</body>
</html>