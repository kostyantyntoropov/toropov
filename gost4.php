<?php
require_once'Connect.php';
?>
<form action="gost4.php" method="GET">
Фамилия клиента:<input type="text" name="NameAuthor"><br>
<br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
  $result=mysqli_query($link,"SELECT
  recepcia.nomer_nomera,
  recepcia.kod_kli,
  recepcia.data_in,
  recepcia.data_out,
  recepcia.fam_kli,
  nomer.komn,
  nomer.etag,
  nomer.balcon,
  nomer.stoimost,
  kateg.kateg
FROM recepcia
  INNER JOIN nomer
    ON recepcia.nomer_nomera = nomer.nomer_nomera
  INNER JOIN kateg
    ON nomer.kateg = kateg.id_kat
WHERE recepcia.fam_kli = '$_GET[NameAuthor]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Номер".'</th>';
echo '<th>'."Код клиента".'</th>';
echo '<th>'."Дата заезда".'</th>';
echo '<th>'."Дата выезда".'</th>';
echo '<th>'."Фамилия".'</th>';
echo '<th>'."Кол-во комнат".'</th>';
echo '<th>'."Этаж".'</th>';
echo '<th>'."Категория".'</th>';
echo '<th>'."Стоимость".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['nomer_nomera'].'</td>';
  echo '<td>'.$row['kod_kli'].'</td>';
  echo '<td>'.$row['data_in'].'</td>';
    echo '<td>'.$row['data_out'].'</td>';
      echo '<td>'.$row['fam_kli'].'</td>';
        echo '<td>'.$row['komn'].'</td>';
          echo '<td>'.$row['etag'].'</td>';
            echo '<td>'.$row['kateg'].'</td>';
              echo '<td>'.$row['stoimost'].'</td>';
  echo '</tr>';

}
echo '</table>';
}
?>