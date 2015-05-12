<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <label for="text">Enter cars</label>
    <input type="text" name="text" id="text"/>
    <input type="submit" name="submit" value="Show result"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $string = $_POST['text'];
    $cars = explode(', ', $string);
    $colors = array('blue', 'yellow', 'red', 'green', 'black', 'white');
    echo '<table border = "1">';
    echo '<tr>';
    echo '<th>';
    echo 'Car';
    echo '</th>';
    echo '<th>';
    echo 'Color';
    echo '</th>';
    echo '<th>';
    echo 'Count';
    echo '</th>';
    echo '</tr>';
    for ($i = 0; $i < count($cars); $i++) {
        $color = rand(0, 5);
        $count = rand(1, 5);
        echo '<tr>';
        echo '<td>';
        echo $cars[$i];
        echo '</td>';
        echo '<td>';
        echo $colors[$color];
        echo '</td>';
        echo '<td>';
        echo $count;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>