<?php
require_once'connect.php';
?>
 <form action="gost2.php" method="GET">
 	Удалить категорию: <input type="text" name="qwerty"><br>
 	<input type="submit" name="submit" value="Удалить"><br>
 </form>
 <?php
 if ($_GET['submit'])
 {
 	$result=mysqli_query($link,"DELETE LOW_PRIORITY QUICK
 		FROM kateg WHERE kateg = '$_GET[qwerty]'
 		LIMIT 100");
 }
?>