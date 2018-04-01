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


   $us = $_SESSION["username"];
   $cs = $_SESSION["clientname"];

   $user = $_POST["user"];
   $nick = $_POST["nick"];
   $date = $_POST["date"];
   $meet = $_POST["meet"];
   $wish = $_POST["wish"];
   $fav1 = $_POST["fav1"];
   $fav2 = $_POST["fav2"];
   $next  =$_POST["next"];
   $likes = $_POST["likes"];
   $mind = $_POST["mind"];
   $weak = $_POST["weak"];
   $strength = $_POST["strength"];
   $say = $_POST["say"];
   $first = $_POST["first"];
   $current = $_POST["current"];
   $worst = $_POST["worst"];
   $advise = $_POST["advise"];

     $stmt = $conn->prepare("insert into data(username,clientname,user,nick,date,meet,wish,fav1,fav2,next,likes,mind,weak,strength,say,first,current,worst,advise) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssssssssssssss',$us,$cs,$user,$nick,$date,$meet,$wish,$fav1,$fav2,$next,$likes,$mind,$weak,$strength,$say,$first,$current,$worst,$advise);



        if($stmt->execute()==true)
        {
          echo "
          <script>
          setTimeout(function()
          {
               window.location.assign('body.html');
          },2000);

          </script>
          ";
        }
        else {
          echo "
          <script>
          setTimeout(function()
          {
               window.location.assign('fillform.html');
          },2000);

          </script>
          ";
        }
/*$sql ="insert into data(username,clientname,user,nick,date,meet,wish,fav1,fav2,next,likes,mind,weak,strength,say,first,current,worst,advise) values('$us','$cs','$user','$nick','$date','$meet','$wish','$fav1','$fav2','$next','$likes','$mind','$weak','$strength','$say','$first','$current','$worst','$advise')";
if ($conn->query($sql) === TRUE)
 {
  echo "New record created successfully";
} else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();*/

     }

 ?>
