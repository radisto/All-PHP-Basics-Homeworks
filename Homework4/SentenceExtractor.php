<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <textarea name="text" cols="30" rows="4"></textarea><br/>
    <input type="text" name="word"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $word = $_POST['word'];
    if ($text[strlen($text)-1] === '?' || $text[strlen($text)-1] === '!' || $text[strlen($text)-1] === '.') {
        $lastSentenceNotSentence = true;
    }
    $sentences = preg_split('/[!?.]/', trim($text), -1, PREG_SPLIT_NO_EMPTY);
    unset($sentences[count($sentences)-1]);
    for ($i = 0; $i < count($sentences); $i++) {
        $words = preg_split('/[^a-zA-Z]/', trim($sentences[$i]), -1, PREG_SPLIT_NO_EMPTY);
        for ($j = 0; $j < count($words); $j++) {
            if ($words[$j] === $word) {
                echo $sentences[$i];
                echo '<br/>';
                $j = count($words);
                break;
            }
        }
    }
}
?>
</body>
</html>