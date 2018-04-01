<?php
session_start();
 ?>
 <!doctype html>
 <html>
  <head> <title>Ur profile</title>
  <link rel="icon" href="love.png">
  </head>
  <style>
  h1
  {
    text-align: center;
    position: relative;
    right: 40px;
    color: white;
  }
  span
  {
    color:red;
  }
  div
  {
   position: relative;
   left:420px;
   top:120px;
   background-color:#726664;
   width: 400px;
   height: 250px;
   border-radius: 25%;
   text-align: center;
  padding: 10px;

  }
  body
  {
    background-color: lightgrey;
  }
  div span
  {
    font-size: 25px;
    color: black;
  }
  div label
  {
    font-size: 25px;
    color: white;

  }
  div form
  {
    position: absolute;
    top:55px;
    left: 25px;
  }
  body
  {
    background-image: url("4.jpg");
  }
  </style>
  <body>
    <?php

$servername="localhost";
$username="root";
$password="";
$dbname="slamverify";

//connnection
$conn =  new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	 die("connection failed");
 else
	 echo "";

   $user =  $_SESSION["username"];

   $sql = "select * from verify where username='$user'";
   $result = $conn->query($sql);
   while($row=$result->fetch_assoc())
   {
     $pass = $row["password"];
      $mobile =  $row["mobile"];
      $email = $row["email"];
   }

     ?>
    <h1>Profile</h1>
    <div>
      <form>
       <label>Ur name :</label>
           <span ><?php echo $user; ?></span><br>
       <label>Ur Password :</label>
           <span ><?php echo $pass; ?></span><br>
       <label>Ur mobile no :</label>
           <span ><?php echo $mobile; ?></span><br>
         <label>Ur email id :</label>
           <span ><?php echo $email; ?></span><br>
    </form>
  </div>
  </body>
</html>
