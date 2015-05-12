<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="get">
    <label for="years">Enter number of years:</label>
    <input type="text" name="years" id="years"/>
    <input type="submit" name="submit" value="Show costs"/>
</form>
<?php
if (isset($_GET['submit'])) {
    $years = $_GET['years'];
    echo '<table border="1">';
    echo '<tr><th>Year</th><th>January</th><th>February</th><th>March</th>';
    echo '<th>April</th><th>May</th><th>June</th><th>July</th><th>August</th>';
    echo '<th>September</th><th>October</th><th>November</th><th>December</th><th>Total:</th></tr>';
    $year = 2014;
    for ($i = 0; $i < $years; $i++) {
        echo '<tr>';
        echo '<td>';
        echo $year - $i;
        echo '</td>';
        $total = 0;
        for ($j = 0; $j < 12; $j++) {
            echo '<td>';
            $value = rand(0, 999);
            $total += $value;
            echo $value;
            echo '</td>';
        }
        echo '<td>';
        echo $total;
        echo '</td>';
        echo '</tr>';
    }
}
?>
</body>
</html>