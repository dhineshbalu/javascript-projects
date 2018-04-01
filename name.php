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
  $_SESSION["clientname"]=$user;
  $g=0;
  $sql = "select * from verify where username='$user'";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
    if($row["username"]==$user)
    {

       echo "
       <script>
       setTimeout(function()
     {
          window.location.assign('fillform.html');
     },2000);
       </script>
       ";
      $g=1;
      break;
    }
  }
  if($g==0)
  {

    echo "
    <script>
    setTimeout(function()
  {

       window.location.assign('refid.html');
       
  },2000);
    </script>
    ";


  }

}
 ?>
