<?php

error_reporting(0);
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "gost";
$link=mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$link)
{
	die('<p style = "color : red">'.mysqli_connect_errno()."-".mysqli_connect_error().'</p>');
}
echo "<p>вы подключились к серверу MySQL</p>";
?>

<font size="12"><p><b>Гостиница</b></p></font>

<font size="4"><p>Выбирете данные которые хотите изменить или найти какую-либо информацию:</p></font>

<br>

<form action="gostinica.php" method="GET">
 	<input type="submit" name="submit" value="Поиск информации по занятости номера">
 </form>

<form action="gost2.php" method="GET">
 	<input type="submit" name="submit" value="Удаление Категории">
 </form>

<form action="gost3.php" method="GET">
 	<input type="submit" name="submit" value="Добавление категории">
 </form>

<form action="gost4.php" method="GET">
 	<input type="submit" name="submit" value="Поиск по фамилии клиента">
 </form>

<form action="gost5.php" method="GET">
 	<input type="submit" name="submit" value="Поиск номеров по наличию балконов">
 </form>
