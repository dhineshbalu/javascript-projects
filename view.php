<?php
session_start();
 ?>
<!doctype html>
<html>
<head>
   <title> My memories with friends</title>
   <link rel="stylesheet" href="view.css">
   <link rel="icon" href="love.png">
</head>
<body>
  <h1>Slam Book</h1>
    <h3>enter ur friends username to view what he written on you</h3>
    <form action="view2.php" method="post">

      <label>username</label><input  id="i1" type="text" name="user"><br>
        <input id="i2" type="submit" value="view it!">
    </form>
    <div>
<?php


$servername="localhost";
$username="root";
$password="";
$dbname="slamverify";


$conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error)
 {
   die("not connected..........");
 }
 else {

 }

 $us = $_SESSION["username"];

 $sql = "select * from data where clientname='$us'";
$result =  $conn->query($sql);
echo "<ol type='1'>";
while($row = $result->fetch_assoc())
{
  echo "<li>".$row["username"]."</li><br>";
}
echo "</ol>";

 ?>
</div>
</body>
</html>
