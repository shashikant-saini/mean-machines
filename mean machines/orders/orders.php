<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAPTHAGIRI MOTORS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="new.js"></script>
    <style>
    .inphp{
        font-size:20px;
    }
    </style>
</head>

<header>
<a href="../index.php">
    <h3 class="back">
        BACK
    </h3>
    </a>
    <div class="head">
        <div class="head1">
            <h1 class="ay">
               SAPTHAGIRI MOTORS
              </h1>
              <h3>LOGIN OR REGISTER</h3>
              
   

        </div>
      </div>
</header>

<body>
<center><p><a href="register.php">Register</a> | <a href="login.php">Login</a></p></center>  
<center><h2>Registration Form</h2></center>  
<form action="" method="POST">  
<legend>  
<fieldset>  
          
Username: <input type="text" name="user"><br />
<div class="cont"></div> 
Name: <input type="text" name="name"><br />
<div class="cont"></div> 
City: <input type="text" name="city"><br />  
<div class="cont"></div> 
Password: <input type="password" name="pass"><br />
<div class="cont"></div> 
<input type="submit" value="Register" name="submit" />  
              
</fieldset>  
</legend>  
</form>  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="sandesh";

if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['pass'])) {  
    $user=$_POST['user']; 
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pass=$_POST['pass'];  
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO register VALUES('$user','$name','$city','$pass')"; 
  
    $result=mysql_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}
?>
</body>
</html> 