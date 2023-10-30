<?php
    $cols = 10;
    $rows = 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td {
  border: 2px solid black;
  border-radius: 10px;
  text-align: left;
}

tr:nth-child(1) {
  text-align: center;
    background-color: green;
}
td:nth-child(1), th:nth-child(1) {
    background-color: green;
  text-align: center;
}
th, td{
}
</style>
<body>
    <?php
    echo '<table>';
    for($i = 1; $i<=$rows; $i++){
    echo '<tr>';
    echo "<th>{$i}</th>";
        for($j = 2; $j<=$cols; $j++){
            $res = $i * $j;
            echo "<th>{$res}</th>";
        }
    echo '</th>';
    }
    echo '</table>'
    ?>
</body>
</html>