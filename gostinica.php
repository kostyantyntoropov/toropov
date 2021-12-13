<?php
require_once'connect.php';
?>
<form action="gostinica.php" method="GET">
 Занятость:<select name="NameZan">
 <?php
$result=mysqli_query($link,"SELECT
  zan.name_kaz
FROM zan");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
  echo"<option>". ($row['name_kaz']."</option>");
}
?>
 </select><br><br>
 <input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  nomer.nomer_nomera,
  kateg.kateg,
  nomer.komn,
  nomer.etag,
  nomer.balcon,
  nomer.stoimost,
  zan.name_kaz
FROM nomer
  INNER JOIN zan
    ON nomer.zan = zan.id_zan
  INNER JOIN kateg
    ON nomer.kateg = kateg.id_kat
WHERE zan.name_kaz = '$_GET[NameZan]'");
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="10">';
echo '<tr>';
echo '<th>'."Номер".'</th>';
echo '<th>'."Категория".'</th>';
echo '<th>'."Комнат".'</th>';
echo '<th>'."Этаж".'</th>';
echo '<th>'."Балкон".'</th>';
echo '<th>'."Стоимость".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['nomer_nomera'].'</td>';
  echo '<td>'.$row['kateg'].'</td>';
  echo '<td>'.$row['komn'].'</td>';
  echo '<td>'.$row['etag'].'</td>';
  echo '<td>'.$row['balcon'].'</td>';
  echo '<td>'.$row['stoimost'].'</td>';
  echo '</tr>';
}
}
echo '</table>';
?>