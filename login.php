<?php
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
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
      echo "<h2>connecting......</h2>";
    }

    $user = $_POST["user"];
    $pass=$_POST["pass"];

   $_SESSION["username"]=$user;

  $sql = "select * from verify";
  $result = $conn->query($sql);
  $grant=0;
  while($row = $result->fetch_assoc())
  {
    if($row["username"]==$user && $row["password"]==$pass)
    {

      $grant=1;
      echo "
      <script>
          setTimeout(function()
        {
              window.location.assign('body.html');
        },2000);
      </script>
      ";
      break;
    }

  }
  if($grant==0)
  {
    echo "
    <script>
    setTimeout(function()
  {
     window.location.assign('login.html');
  },2000);

    </script>
    ";
  }
 }
 ?>
