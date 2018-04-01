<?php
  session_start();

  session_unset();


session_destroy();


echo "<h2>disconnecting.............!</h2>";

echo "
<script>
 setTimeout(function()
{
    window.location.assign('main.html');
},2000);
</script>
";
 ?>
