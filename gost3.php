<?php
require_once'connect.php';
?>
<form action="gost3.php" method="GET">
 	Добавить категорию: <input type="text" name="qwerty"><br>
 	<input type="submit" name="submit" value="Добавить"><br>
 </form>
 <?php
 if ($_GET['submit'])
 {
 	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO kateg (id_kat, kateg) VALUES (0, '$_GET[qwerty]')");
 }
?>