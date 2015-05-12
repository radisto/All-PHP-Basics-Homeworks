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
        for ($i = 0; $i < count($arr); $i++) {
            echo "$i : $arr[$i]<br/>";
        }
    }
?>
</body>
</html>