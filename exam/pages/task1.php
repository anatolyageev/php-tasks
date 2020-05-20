<?php
$cols =10;
$rows= 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
   TABLE {
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
    width: 300px; /* Ширина таблицы */
   } 
   th { 
    background: #fc0; /* Цвет фона ячейки */
    text-align: left; /* Выравнивание по левому краю */
   }
   TD {
    background: #fff; /* Цвет фона ячеек */
    text-align: center; /* Выравнивание по центру */
   }
   TH, TD {
    border: 1px solid black; /* Параметры рамки */
    padding: 4px; /* Поля вокруг текста */
   } 
  </style>
</head>
<body>
<h1>Table <?php echo $cols ?> X <?php echo $rows ?> </h1>
<table>
<?php for ($i=1; $i <= $rows ; $i++): ?>
    <tr>
    <?php for ($j=1; $j <= $cols; $j++): ?>
        <?php if ( $i*$j == $j || $i*$j == $i): ?>
        <th> <?php echo $i*$j ?> </th>
        <? else: ?>
            <td> <?php echo $i*$j ?> </td>
        <?php endif; ?>
    <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
    
</body>
</html>