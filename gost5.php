<?php
require_once'connect.php';
?>
<form action="gost5.php" method="GET">
 Наличие балкона:<select name="NameBalc">
 <?php
$result=mysqli_query($link,"SELECT
  yesorno.otvet
FROM yesorno");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
  echo"<option>". ($row['otvet']."</option>");
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
  nomer.kateg,
  nomer.komn,
  nomer.etag,
  nomer.balcon,
  nomer.stoimost,
  zan.name_kaz
FROM nomer
  INNER JOIN zan
    ON nomer.zan = zan.id_zan
WHERE nomer.balcon = '$_GET[NameBalc]'");
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="10">';
echo '<tr>';
echo '<th>'."Номер".'</th>';
echo '<th>'."Категория".'</th>';
echo '<th>'."Комнат".'</th>';
echo '<th>'."Этаж".'</th>';
echo '<th>'."Балкон".'</th>';
echo '<th>'."Стоимость".'</th>';
echo '<th>'."Занятость".'</th>';
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
    echo '<td>'.$row['name_kaz'].'</td>';
  echo '</tr>';
}
}
echo '</table>';
?>