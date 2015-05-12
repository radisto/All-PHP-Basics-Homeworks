<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$total = 0;
echo '<table border = "1">';
echo '<tr>';
echo '<th>';
echo 'Number';
echo '</th>';
echo '<th>';
echo 'Square';
echo '</th>';
echo '</tr>';
for ($i = 0; $i <=100; $i+=2) {
    echo '<tr>';
    echo '<td>';
    echo $i;
    echo '</td>';
    echo '<td>';
    $sqrt = (float)sprintf('%0.2f', sqrt($i));
    $total += $sqrt;
    echo $sqrt;
    echo '</td>';
    echo '</tr>';
}
echo '<tr>';
echo '<td>';
echo '<b>Total:</b>';
echo '</td>';
echo '<td>';
echo $total;
echo '</td>';
echo '</tr>';
echo '</table>';
?>
</body>
</html>