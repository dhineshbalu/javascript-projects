<?php
session_start();
 ?>
 <!doctype html>
 <html>
 <head>
    <title> My memories with friends</title>
    <link rel="stylesheet" href="view2.css">
	<link rel="icon" href="love.png">
 </head>
 <body>
   <h1>Slam Book</h1>
   <h3>view what written about you</h3>
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
        die("");
      }
      else {
        echo "";
      }
      $cs = $_SESSION["username"];
      $us = $_POST["user"];

      $sql ="select * from data where username='$us' and clientname='$cs'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $user = $row["user"];
      $nick = $row["nick"];
      $date = $row["date"];
      $meet = $row["meet"];
      $wish = $row["wish"];
      $fav1 = $row["fav1"];
      $fav2 = $row["fav2"];
      $next  =$row["next"];
      $likes = $row["likes"];
      $mind = $row["mind"];
      $weak = $row["weak"];
      $strength = $row["strength"];
      $say = $row["say"];
      $first = $row["first"];
      $current = $row["current"];
      $worst = $row["worst"];
      $advise = $row["advise"];
    }
    ?>
    <h3 id="h2">About himself</h3>
  <form>
    <br><br>
     <label>Name :  </label><span><?php  echo $us; ?></span><br><br><br>
      <label>Nick name :  </label><span><?php  echo $nick; ?></span><br><br><br>
       <label>Date of birth :  </label><span><?php  echo $date; ?></span><br><br><br>
        <label>If he/she want to meet anyone,it would be :  </label><span><?php  echo $meet; ?></span><br><br><br>
         <label>If he/she had 3 wishes, what would they be :  </label><span><?php  echo $wish; ?></span><br><br><br>
          <label>Favorite sports and teams :  </label><span><?php  echo $fav1; ?></span><br><br><br>
           <label>Favorite songs and music :  </label><span><?php  echo $fav2; ?></span><br><br><br>
            <label>Where will he/she want to be in 20 years :  </label><span><?php  echo $next; ?></span><br><br><br>
               <label>What things iritate him/her the most :  </label><span><?php  echo $likes; ?></span><br><br><br>

  </form>

  <h3 id="h1">About myself</h3>
<form>
  <br><br>
         <label>Things that gets into his/her mind when you hear my name  :  </label><span><?php  echo $mind; ?></span><br><br><br>
           <label>My weakness :  </label><span><?php  echo $weak; ?></span><br><br><br>
            <label>My strength :  </label><span><?php  echo $strength; ?></span><br><br><br>
             <label>What people say about me :  </label><span><?php  echo $say; ?></span><br><br><br>
              <label>His/her first impression on me :  </label><span><?php  echo $first; ?></span><br><br><br>
               <label>His/her present impression on me :  </label><span><?php  echo $current; ?></span><br><br><br>
                <label>Worst habit of me :  </label><span><?php  echo $worst; ?></span><br><br><br>
                 <label>Advices to me :  </label><span><?php  echo $advise; ?></span><br><br><br>

</form>

 </body>
</html>
