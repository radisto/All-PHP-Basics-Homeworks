<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <textarea name="text" cols="30" rows="4"></textarea><br/>
    <input type="text" name="string"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $string = $_POST['string'];
    $banList = explode(', ', $string);
    for ($i = 0; $i < count($banList); $i++) {
        $text = str_replace($banList[$i], str_repeat('*', strlen($banList[$i])), $text);
    }
    echo $text;
}
?>
</body>
</html>