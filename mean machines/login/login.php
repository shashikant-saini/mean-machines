<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAPTHAGIRI MOTORS</title>
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
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname="sandesh";
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: ../index.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>
