<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BIG BOY TOYS </title>
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
	<a href="../index.html">
    <h3 class="back">
        BACK
    </h3>
    </a>
    <div class="head">
        <div class="head1">
            <h1 class="ay">
               BIG BOYS TOYS
              </h1>
              <h3>BUY CAR</h3>
              
              <form method="post">
                  
  CAR ID: <input type="text" placeholder="ID" name="id">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  NAME: <input type="text" placeholder="Customer Name" name="nam">
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
    $nam=$_POST['nam'];
     $sql="INSERT INTO orders  VALUES  ('$id','$nam')";
     $sql1="DELETE FROM sell WHERE id=$id";
     $conn->query($sql1);
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
<div class="cont">
       <div class="cont1">
    <div class="tab">
    <table>
    <th>ID</th>
    <th>NUMBER</th>
    <th>BRAND</th>
    <th>MODEL</th>
    <th>YEAR</th>
    <th>DRIVEN</th>
    <th>COST</th>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="sandesh";
        
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * from sell";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["number"]."</td><td>".$row["brand"]."</td><td>".$row["model"]."</td><td>".$row["year"]."</td><td>".$row["driven"]."</td><td>".$row["cost"]."</td></tr>";
    }
}
    ?>
</table>
    </div>
    </div>  
       </div>


</body>
</html>