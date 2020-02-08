<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BIG BOY TOYS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
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
               BIG BOYS TOYS
              </h1>
              
              <form method="post">
  CAR ID: <input type="text" placeholder="ID" name="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  NUMBER: <input type="text" placeholder="Number" name="num">
  <br>
  <br>
  BRAND: <input type="text" placeholder="Brand" name="bd">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  MODEL: <input type="text" placeholder="Model" name="md">
  <br>
  <br>
  YEAR: <input type="text" placeholder="Year" name="yr">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  DRIVEN KMS: <input type="text" placeholder="Driven Kms" name="dkm">
  <br>
  <br>
  COST: <input type="text" placeholder="Cost" name="cst">&emsp;&emsp;
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">
  <br>
  <br>
</form> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="sandesh"   ;
        
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=NULL;
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $num=$_POST['num'];
    $bd=$_POST['bd'];
    $md=$_POST['md'];
    $yr=$_POST['yr'];
    $dkm=$_POST['dkm'];
    $cst=$_POST['cst'];
    
    $sql="INSERT INTO sell  VALUES  ('$id','$num','$bd','$md','$yr','$dkm','$cst')";
}
//$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


        </div>
      </div>
</header>

<body>
</body>
</html>