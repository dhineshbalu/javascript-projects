<?php

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
   $pass = $_POST["pass"];
   $mobi = $_POST["mobi"];
   $email = $_POST["mail"];

    $stmt= $conn->prepare("insert into verify(username,password,mobile,email) values(?,?,?,?)");
    $stmt->bind_param("ssss",$user,$pass,$mobi,$email);
    if($stmt->execute()==true)
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
    else {
      echo "
      <script>
       window.location.assign('signup.html');
      </script>
      ";
    }
}

?>
