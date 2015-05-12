<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table {
            background: lightgrey;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="text" cols="50" rows="2"></textarea><br/>
    <input type="submit" name="submit" value="Count words"/>
</form><br/>
<?php
if (isset($_POST['submit'])) {
    $arr = [];
    $text = strtolower ($_POST['text']);
    $words = explode(' ', $text);
    foreach ($words as $word) {
        $arr[$word] = substr_count($text, $word);
    }
    echo '<table border="1">';
    foreach ($arr as $key => $value) {
        echo '<tr>';
        echo '<td>';
        echo $key;
        echo '</td>';
        echo '<td>';
        echo $value;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>