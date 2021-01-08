<?php
 if(isset($_POST['submit']))
 {
   shell_exec('sh querydb.sh');
 }
?>

<form action="index.php" method="post">
<input type="submit" name="submit" value="Call my Shell Script">
</form>