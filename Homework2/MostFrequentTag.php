<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        form {
            border: 1px solid black;
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    Enter tags:<br/><br/>
    <input type="text" name="text">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo '<br/>';
echo '<br/>';
if (isset($_POST['submit'])) {
    $arr = explode(', ', $_POST['text']);
    $arr2 = [];
    foreach ($arr as $word) {
        if (!$arr2[$word]) {
            $arr2[$word] = 1;
        }
        else {
            $arr2[$word]++;
        }
    }
    arsort($arr2);
    foreach ($arr2 as $key => $value) {
        echo "$key : $value times<br/>";
    }
    echo '<br/>';
    reset($arr2);
    $first_key = key($arr2);
    echo "Most Frequent Tag is: $first_key";
}
?>
</body>
</html>