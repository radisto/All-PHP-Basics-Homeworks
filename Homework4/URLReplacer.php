<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <textarea name="text" cols="30" rows="5"></textarea><br/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    preg_match_all('/(<a)(.+?)(>)(.+?)(>)/', $text, $arrText, PREG_SET_ORDER);
    for ($i = 0; $i < count($arrText); $i++) {
        $string = $arrText[$i][0];
        $string = str_replace(substr($string ,strlen($string) - 4), '[/URL]', $string);
        $string = str_replace('>', ']', $string);
        $string = str_replace('<a href', '[URL', $string);
        $string = str_replace('"', '', $string);
        $text = str_replace($arrText[$i][0], $string, $text);
    }
    echo htmlentities($text);
}
?>
</body>
</html>