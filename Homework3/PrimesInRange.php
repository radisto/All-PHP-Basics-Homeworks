<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="get">
    <label for="start">Starting Index:</label>
    <input type="text" name="start" id="start"/>
    <label for="end">End:</label>
    <input type="text" name="end" id="end"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_GET['submit'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo '<b>';
        }
        echo $i;
        if (isPrime($i)) {
            echo '</b>';
        }
        if ($i != $end) {
            echo ', ';
        }
    }
}

function isPrime($num) {
    if($num == 2)
        return true;
    if($num < 2 || $num % 2 == 0)
        return false;
    for($i = 3; $i <= ceil(sqrt($num)); $i+=2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}
?>
</body>
</html>