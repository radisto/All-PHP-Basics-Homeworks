<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="get">
    <label for="string">Input string:</label>
    <input type="text" name="string" id="string"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_GET['submit'])) {
    $string = $_GET['string'];
    $arr = explode(', ', $string);
    echo '<table border="1"';
    for ($i = 0; $i < count($arr); $i++) {
        $number = (string)$arr[$i];
        $sum = 0;
        $boolean = false;
        if (ctype_digit($number)) {
            for ($j = 0; $j < strlen($number); $j++) {
                $sum += (int)$number[$j];
            }
        }
        else {
            $boolean = true;
        }
        echo '<tr>';
        echo '<td>';
        echo $number;
        echo '</td>';
        echo '<td>';
        echo ($boolean ? 'I cannot sum that' : $sum);
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>