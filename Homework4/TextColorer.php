<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        span.red {
            color: red;
        }
        span.blue {
            color: blue;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="text" cols="30" rows="2"></textarea><br/>
    <input type="submit" name="submit" value="Count words"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $text = preg_replace('/\s+/', '', $text);
    $text = str_split($text);
    for ($i = 0; $i < count($text); $i++) {
        if (ord($text[$i]) % 2) {
            echo '<span class="blue">';
            echo $text[$i];
        }
        else {
            echo '<span class="red">';
            echo $text[$i];
        }
        echo '</span>';
        if ($i != count($text) - 1) {
            echo ' ';
        }
    }
}
?>
</body>
</html>