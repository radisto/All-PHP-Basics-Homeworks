<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <input type="text" name="string" id="string"/>
    <input type="radio" name="option" value="1" id="1"/>
    <label for="1">Check Palindrome</label>
    <input type="radio" name="option" value="2" id="2"/>
    <label for="2">Reverse String</label>
    <input type="radio" name="option" value="3" id="3"/>
    <label for="3">Split</label>
    <input type="radio" name="option" value="4" id="4"/>
    <label for="4">Hash String</label>
    <input type="radio" name="option" value="5" id="5"/>
    <label for="5">Shuffle String</label>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $string = (string)$_POST['string'];
    $option = $_POST['option'];
    switch ($option) {
        case 1:
            if (Palindrome($string)) {
                echo "$string is a palindrome!";
            }
            else {
                echo "$string is not a palindrome!";
            }
            break;
        case 2:
            echo Reverse($string);
            break;
        case 3:
            echo Split2($string);
            break;
        case 4:
            echo hash('gost', $string);
            break;
        case 5:
            echo str_shuffle($string);
    }
}

function Palindrome($n) {
    for ($i = 0; $i < strlen($n)/2; $i++) {
        if ($n[$i] !== $n[strlen($n)-1-$i]) {
            return false;
        }
    }
    return true;
}

function Reverse($n) {
    $reversed = '';
    for ($i = strlen($n) - 1; $i >= 0; $i--) {
        $reversed .= $n[$i];
    }
    return $reversed;
}

function Split2($n) {
    $n = preg_replace('/\s+/', '', $n);
    $n = str_split($n, 1);
    $n = implode(' ', $n);
    return $n;
}
?>
</body>
</html>